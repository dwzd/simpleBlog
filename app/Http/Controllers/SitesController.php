<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitesController extends Controller
{
    //
    public function index(){
        return view("welcome");
    }

    public function about(){
//        $name = "Darwin";
//        return view("sites.about")->with('theName', $name);
        return view("sites/about") -> with([
            'firstName' => "Darwin",
            'lastName' => 'Zh'
        ]);

    }

    public function contact(){
        $name = 'DWZ';
        $tel = 6188218;
        $people = ['Lewis', 'Warrior', 'Bob'];
//        $people = [];
        return view('sites/contact', compact('name', 'tel', 'people'));

    }

}

