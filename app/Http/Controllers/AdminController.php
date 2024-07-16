<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Contact;
use App\Models\Beranda;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $contacts = Contact::all();
        return view('contact', compact('contacts'));
}
public function index()
    {
        $books = Book::all();
        return view('tabelbook', compact('books'));
}
public function book()
    {
        $data = [
            'books' => Book::all(),
        ];

        return view('book', $data);
    }
public function beranda()
    {
        $berandas = Beranda::all();
        return view('beranda', compact('berandas'));
}
}