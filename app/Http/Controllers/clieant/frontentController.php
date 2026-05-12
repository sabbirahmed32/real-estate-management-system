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
}
