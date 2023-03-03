<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailPostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{

    public function index()
    {
        return view('home.index');
    }
    public function categories(){
        return view('home.calligraphy');
    }
    public function gallery()
    {
        return view('home.gallery');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function about()
    {
        return view('home.about');
    }
    public function authenticate()
    {
        return view('home.authenticate');
    }

    public function sendEmail(EmailPostRequest $request)
    {
        $validated = $request->validated();
        Mail::send('emails.contact',compact('validated'), function ($email) use($validated) {
            $email->subject($validated['subject']);
            $email->to('huy.th878@aptechlearning.edu.vn',$validated['name']);
        });

        Alert::success('Success', 'Your email sent successfully!')->autoClose(1500);

        return redirect()->back();
    }

}
