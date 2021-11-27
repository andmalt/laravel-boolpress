<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('guests.home');
    }
    public function contact(){

        return view('guests.contact');
    }
    public function createContact(){

        return redirect()->route('guests.thanks');
    } 

    public function thanks(){

        return view('guests.thanks');
    }
}
