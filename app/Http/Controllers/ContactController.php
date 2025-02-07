<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required',
        ], [
            'name.required' => 'Prašome įvesti vardą',
            'email.required' => 'Prašome įvesti el. pašto adresą',
            'email.email' => 'Prašome įvesti teisingą el. pašto adresą',
            'message.required' => 'Prašome įvesti žinutę',
        ]);

        // Here you would typically send an email
        // For now, we'll just redirect back with a success message
        return redirect()->back()->with('success', 'Ačiū už jūsų žinutę. Susisieksime su jumis artimiausiu metu.');
    }
}
