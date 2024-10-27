<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmationMail;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ConfirmationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'assistant_name' => 'required|string',
            'assistant_email' => 'required|email',
            'confirmation' => 'required',
            'message' => 'nullable|string'
        ]);

        $invitation = Invitation::create([
            'assistant_name' => $request->get('assistant_name'),
            'assistant_email' => $request->get('assistant_email'),
            'confirmation' => $request->get('confirmation'),
            'message' => $request->get('message')
        ]);

        Mail::to(['mariacristinasub@gmail.com', $request->assistant_email])->send(new ConfirmationMail($invitation->toArray()));

        return redirect()->back()->with('success', '¡Gracias por confirmar tu asistencia!');
    }
}
