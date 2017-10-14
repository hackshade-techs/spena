<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactFeedback;
use Mail;

class ContactController extends Controller
{
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feeback = Contact::create(request()->all());
        $this->sendMail($feeback);
        return back()->withSuccess('Thanks for Contacting Us, Your feedback has been submitted Successfully');
    }

    public function sendMail($feeback)
    {
        $emailReceivers = ['maronwhite6@gmail.com'];
       \Mail::to($emailReceivers)->send(new ContactFeedback($feeback));
    }

}
