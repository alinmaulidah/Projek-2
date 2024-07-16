<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('kontak', [
            'contacts' => Contact::latest()->get(),
        ]);
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'message' => 'required|string|max:500',
        ]);

        $contact = new Contact();
        $contact->email = $request->email;
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();

        session()->flash('success', 'Pesan Anda telah terkirim!');

        return redirect()->route('contacts.index');
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);

        return view('contacts.edit', [
            'contact' => $contact,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'message' => 'required|string|max:500',
        ]);

        $contact = Contact::findOrFail($id);
        $contact->email = $request->email;
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();

        session()->flash('info', 'Data Berhasil Diperbarui.');

        return redirect()->route('contacts.index');
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        session()->flash('danger', 'Data Berhasil Dihapus.');

        return redirect()->route('contacts.index');
    }
}
