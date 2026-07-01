<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\agents;

class AgentsController extends Controller
{
        // Agents
        public function addAgent(){
            return view('server.agent.add-agent');
        }




        public function storeAgents(Request $request){
            // dd($request->all());
        $imageName = null;

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $imageName = time().'.'.$image->getClientOriginalExtension();

            $image->move(public_path('uploads/agents'), $imageName);
        }

        agents::create([
            'image'             => $imageName,
            'name'              => $request->name,
            'agents_type'       => $request->agents_type,
            'email'             => $request->email,
            'phone'             => $request->phone,
            'properties_number' => $request->properties_number,
            'gender'            => $request->gender,
            'property_status'   => $request->property_status,
            'property_price'    => $request->property_price,
            'max_rooms'         => $request->max_rooms,
            'beds'              => $request->beds,
            'baths'             => $request->baths,
            'street_address'    => $request->street_address,
            'state'             => $request->state,
            'country'           => $request->country,
            'city'              => $request->city,
            'zip_code'          => $request->zip_code,
            'address'           => $request->address,
        ]);

        return redirect()
            ->route('add.agent')
            ->with('success', 'Agent Added Successfully');
    }

    // allAgent
        public function allAgent(){
            $agents = agents::latest()->get();
            return view('server.agent.all-agent', compact('agents'));
        }

    // agentProfile
        public function agentProfile(){
            return view('server.agent.agent-profile');
        }
}
