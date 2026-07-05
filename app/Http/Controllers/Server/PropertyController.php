<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\agents;

class PropertyController extends Controller
{
    //createProperty
    public function createProperty(){
        $agents = agents::all();
        return view('server.property.property_add', compact('agents'));
    }
}
