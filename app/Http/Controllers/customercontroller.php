<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use Illuminate\Support\Facades\Mail;
use App\Mail\contact;
class customercontroller extends Controller
{
    public function store(Request $request)
    {
        $customer = new customer;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->subject = $request->subject;
        $customer->message = $request->message;
        Mail::to($request->email)->send(new contact($request->subject, $customer->message, $request->name));
        $customer->save();
        return redirect()->to('/#contact')->with('success', 'Message sent successfully');
    }
}
