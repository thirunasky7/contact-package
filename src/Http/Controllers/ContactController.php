<?php

namespace Netscalars\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Netscalars\Contact\Models\Contact as Contact;
use Netscalars\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
         return view('contact::contact');
    }
    
    public function send(Request $request){
         Contact::create($request->all());
         Mail::to(config('contact.send_mail_to'))->send(new ContactMailable($request->message,$request->name));
         return redirect(route('contact'));
    }
}
