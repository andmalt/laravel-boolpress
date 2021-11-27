<?php

namespace App\Http\Controllers\Guests;

use App\Mail\SendNewMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;


class HomeController extends Controller
{
    public function index(){

        return view('guests.home');
    }
    public function contact(){

        return view('guests.contact');
    }
    public function createContact(Request $request){
        $data = $request->all();

        $newLead = new Lead();
        $newLead->fill($data);
        $newLead->save();


        Mail::to('account@mail.it')->send(new SendNewMail($newLead));
        return redirect()->route('guests.thanks');
    } 

    public function thanks(){

        return view('guests.thanks');
    }
}
