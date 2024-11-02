<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\NewsletterSubscribe;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscriberController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'email'=> 'required'
        ]);
       $subscriber = Subscriber::create($request->all());

        Mail::to($subscriber ->email)->send(new NewsletterSubscribe($subscriber->email));

        return redirect()->back()->with('success', 'Subscribe Successfully');
    }
}
