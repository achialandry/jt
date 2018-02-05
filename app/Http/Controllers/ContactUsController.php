<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mail\ContactEmail;


class ContactUsController extends Controller
{
    public function create()
    {

        return view('index');
    }

    public function store(Request $request)
    {
        $contact = [];

        $contact['name'] = $request -> get('name');
        $contact['address'] = $request -> get('address');
        $contact['city'] = $request -> get('city');
        $contact['province'] = $request -> get('province');
        $contact['phone'] = $request -> get('phone');
        $contact['email'] = $request -> get('email');
        $contact['postal'] = $request -> get('postal');
        $contact['country'] = $request -> get('country');
        $contact['subject'] = $request -> get('subject');
        $contact['message'] = $request -> get('message');

        //send mail logic here
        Mail::to('achialands@icloud.com')->send(new ContactEmail($contact));

        flash('Your Message has been sent! If you do not hear back from us within 24hrs, please call: 604 - 503 - 4161') -> success();
        return back();
    }
}
