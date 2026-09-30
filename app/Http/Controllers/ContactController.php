<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(
        Request $request
    ): RedirectResponse {

        $validated = $request->validate([

            'name' => [
                'required',
                'string',
                'max:100',
            ],

            'email' => [
                'required',
                'email',
                'max:150',
            ],

            'message' => [
                'required',
                'string',
                'min:10',
                'max:3000',
            ],

        ]);


        ContactMessage::create(
            $validated
        );


        return redirect()
            ->route('home')
            ->with(
                'success',
                'Thank you. Your message has been sent successfully.'
            );
    }
}