<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'subject' => 'required',
            'message' => 'required'
        ]);


        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone ?? "brak",
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
//        return redirect()->back()
//            ->with(['success' => 'Dziękujęmy za kontakt z nami. Wkrótce skontaktujemy się z Tobą.']);
        return response()->json(['success' => "Dziękujemy"]);
    }
}
