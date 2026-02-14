<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerMessage;

class CustomerMessageController extends Controller
{
    public function register_customer_msg(Request $request){

        try {
            
            // ✅ Validation
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
            ]);

            // ✅ Enregistrement
            CustomerMessage::create([
                'customer_name' => $validated['name'],
                'customer_email' => $validated['email'],
                'subject' => $validated['subject'],
                'message' => $validated['message'],
                'send_mail' => 'no'
            ]);

            return back()->with('success', 'Utilisateur créé avec succès !');
            
        } catch (\Throwable $e) {
            return $e->getMessage();
        }
    

    }
}
