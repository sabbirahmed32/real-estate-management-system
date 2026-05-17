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
    // propertiesDetails
    public function propertiesDetails(){
        return view('clieant.frontent.property-details');
    }

    // services
    public function services(){
        return view('clieant.frontent.services');
    }
    // servicesDetails
    public function servicesDetails(){
        return view('clieant.frontent.service-details');
    }

    // agents
    public function agents(){
        return view('clieant.frontent.agents');
    }

    // agentsProfile
    public function agentsProfile(){
        return view('clieant.frontent.agent-profile');
    }

    // blog
    public function blog(){
        return view('clieant.frontent.blog');
    }

    // blogDetals
    public function blogDetals(){
        return view('clieant.frontent.blog-details');
    }

    // contact
    public function contact(){
        return view('clieant.frontent.contact');
    }

    }

