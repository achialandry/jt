<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Mail\ClientUploadEmail;

class FileUploadController extends Controller
{
    /*
    * Displays a listing of the resource
    *
    *@return \Illuminate\Http\Response
    */
    public function fileUpload()
    {
        return view('home');
    }

    /*
    * Displays a listing of the resource
    *
    *@return \Illuminate\Http\Response
    */

    public function fileUploadPost(Request $request)
    {
        request() -> validate([
            'file' => 'required|file|mimes:jpg,jpeg,png,doc,pdf,svg,gif|max:2048',
        ]);

        $fileName = time().'.'.request()->file->getClientOriginalExtension();
        request()->file->move(public_path('client_uploads'), $fileName);

        // //Request File
        // $file = $request->file('image');
        //
        // //Destination
        //  $destination = public_path() . '/img/';
        //
        // //Define the name
        // $name= "image";
        //
        // //Get file extension
        // $extension = $file->getClientOriginalExtension();
        //
        // //join the name you set with the extension
        // $filename = $name . '.' . $extension;
        //
        // //after that move the file to the directory
        // $file->move($destination, $filename);

        $clientupload = [];

        $clientupload['name'] = $request -> get('name');
        $clientupload['phone'] = $request -> get('phone');
        $clientupload['email'] = $request -> get('email');
        $clientupload['subject'] = $request -> get('subject');
        $clientupload['message'] = $request -> get('message');
        $clientupload['file'] = $fileName;

        //send mail logic here
        Mail::to('achialands@icloud.com')->send(new ClientUploadEmail($clientupload));

        flash('Your Message has been sent! If you do not hear back from us within 24hrs, please call: 604 - 503 - 4161') -> success();

        return back();
        // -> with('success', 'You file has been uploaded')
        // -> with('file', $fileName);
    }

}
