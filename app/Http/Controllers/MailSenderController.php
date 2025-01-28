<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EmailSender;
use Illuminate\Support\Facades\Mail;

class MailSenderController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Mail::to('tuyor.jynchris@gmail.com')->send(new EmailSender($request->all()));

        return redirect()->route('contact.show')->with('success', 'Your message has been sent!');
    }
}
