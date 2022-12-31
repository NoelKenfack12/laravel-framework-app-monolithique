<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }
 
    public function store(ContactRequest $request)
    {

        \App\Models\Contacts::create([
            'email' => $request->email,
            'nom' => $request->nom,
            'message' => $request->message
        ]);

        /*$contact = new \App\Models\Contacts;
        $contact->email = $request->email;
        $contact->nom = $request->nom;
        $contact->message = $request->message;
        $contact->save();*/
        return view('confirm');
    }
}
