<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
        ], [
                'g-recaptcha-response.required' => "Captcha Wymagana",
            ]
        );

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

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
