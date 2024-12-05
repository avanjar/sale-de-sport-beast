<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5|max:45',
            'request' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        return redirect()->route('contact.index')->with('success', 'Votre message a été envoyé avec succès !');
    }
}