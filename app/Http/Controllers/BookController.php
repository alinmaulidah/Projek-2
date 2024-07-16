<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pdf' => 'nullable|mimes:pdf|max:10000'
        ]);

        $book = Book::findOrFail($id);

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
            $book->photo = $photoPath;
        }

        if ($request->hasFile('pdf')) {
            $pdfPath = $request->file('pdf')->store('pdfs', 'public');
            $book->pdf = $pdfPath;
        }

        $book->name = $request->input('name');
        $book->penulis = $request->input('penulis');
        $book->type = $request->input('type');
        $book->save();

        return redirect()->route('books.index')->with('success', 'Book updated successfully');
    }
}
