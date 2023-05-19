<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\GuestMail;

class GuestMailController extends Controller
{
    public function store(Request $request)
    {
        Mail::to('darmawanmlnaa@gmail.com')->send(new GuestMail($request->name, $request->email, $request->phone, $request->message));
        return redirect()->back()->with('success_message', 'Your messages has been sent to our admin');
    }
}
