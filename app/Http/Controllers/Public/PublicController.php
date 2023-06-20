<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use App\Models\maison;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    //
    public function index(){
        $maisons = maison::where("status", "DESPONIBLE")->orderBy('id', 'desc')->limit(6)->get();
        return view('index', compact('maisons'));
    }
    public function afficherContact(){
        return view('contact');
    }
    public function afficherAbout(){
        return view('about');
    }
    public function afficherActivites(){
        return view("activites");
    }
}
