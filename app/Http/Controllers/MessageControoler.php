<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageControoler extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        // Validate the incoming request
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string',
        ]);
    
        // Example: Save to database (if you have a model called ContactMessage)
        Message::create($validated);
    
        return redirect()->back()->with('success', 'Your message has been sent successfully.');
        
    }
}
