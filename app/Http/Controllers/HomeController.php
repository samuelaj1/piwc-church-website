<?php

namespace App\Http\Controllers;

use App\Jobs\SendOneSignalEmailJob;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function contact(){
        return view('contact');
    }

    public function sermons(){
        return view('sermons');
    }

    public function events(){
        return view('events');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = (object) [
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
        ];

        $subject =
            'New Contact Message - PIWC Hull';

        SendOneSignalEmailJob::dispatch(
            ['samuelagyekumhene@gmail.com',],
            $subject,
            'emails.new_contact',
            [
                'contact' => $contact
            ]
        );

        return back()->with(
            'success',
            'Message sent successfully.'
        );
    }
}
