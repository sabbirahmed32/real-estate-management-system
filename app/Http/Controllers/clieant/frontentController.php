<?php

namespace App\Http\Controllers\clieant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class frontentController extends Controller
{
    //index

    public function index(){
        return view('clieant.frontent.index');
    }


    // about
    public function about(){
        return view('clieant.frontent.about');
    }

    // properties
    public function properties(){
        return view('clieant.frontent.properties');
    }

    // services
    public function services(){
        return view('clieant.frontent.services');
    }

    // agents
    public function agents(){
        return view('clieant.frontent.agents');
    }

    // blog
    public function blog(){
        return view('clieant.frontent.blog');
    }
}
