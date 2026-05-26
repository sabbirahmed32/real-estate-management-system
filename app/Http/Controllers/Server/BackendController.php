<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    //dashboard
  public function dashboard(){
    return view('server.dashboard');
  }
}
