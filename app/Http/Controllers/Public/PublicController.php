<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    //
    public function afficherContact(){
        return view('contact');
    }
    public function afficherAbout(){
        return view('about');
    }
}
