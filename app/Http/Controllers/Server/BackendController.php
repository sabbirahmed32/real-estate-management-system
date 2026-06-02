<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    //dashboard
        public function dashboard(){
            return view('server.deshboard.dashboard');
        }

    //Agent Dashboard
        public function agentDashboard(){
            return view('server.deshboard.agent-dashboard');
        }

    //Analytics Dashboard
        public function analyticsDashboard(){
            return view('server.deshboard.analytics-ashboard');
        }

}
