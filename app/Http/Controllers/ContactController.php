<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\AdminContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validation
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'phone'   => 'required|string|max:20',
            'email'   => 'required|email',
            'service' => 'required|string',
            'message' => 'nullable|string',
        ]);

        // 2. Persistent Storage (Backup)
        Contact::create($validated);

        // 3. Send Email via Resend
        try {
            // Replace with your actual business email
            Mail::to('info@purixhomeservices.com')->send(new AdminContactMail($validated));
        } catch (\Exception $e) {
            Log::error('Resend Mail Error: ' . $e->getMessage());
            // We still proceed to thank you because the lead is saved in the DB
        }

        return redirect()->route('thank.you');
    }
}