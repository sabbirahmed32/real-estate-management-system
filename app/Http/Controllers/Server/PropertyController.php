<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Agents;
use App\Models\Property;
use App\Models\PropertyImage;

class PropertyController extends Controller
{
    public function createProperty()
    {
        $agents = Agents::all();

        return view('server.property.property_add', compact('agents'));
    }

    public function storeProperty(Request $request)
    {
        dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'agent_id' => 'required|exists:agents,id',
            'property_type' => 'required',
            'property_status' => 'required',
            'price' => 'nullable|numeric',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $property = Property::create([
            'agent_id' => $request->agent_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title) . '-' . time(),

            'property_type' => $request->property_type,
            'property_status' => $request->property_status,

            'price' => $request->price,
            'security_deposit' => $request->security_deposit,
            'available_from' => $request->available_from,

            'max_rooms' => $request->max_rooms,
            'beds' => $request->beds,
            'baths' => $request->baths,
            'area' => $request->area,

            'parking' => $request->parking,
            'garage' => $request->garage,

            'street_address' => $request->street_address,
            'state' => $request->state,
            'country' => $request->country,
            'city' => $request->city,
            'zip_code' => $request->zip_code,

            'address' => $request->address,

            'interior_features' => $request->interior_features,
            'amenities' => $request->amenities,
        ]);

        if ($request->hasFile('images')) {

            foreach ($request->file('images') as $image) {

                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

                $image->move(public_path('uploads/property'), $imageName);

                PropertyImage::create([
                    'property_id' => $property->id,
                    'image' => $imageName,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Property Added Successfully.');
    }
}
