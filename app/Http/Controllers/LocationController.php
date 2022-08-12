<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
class LocationController extends Controller
{

     public function index()
    {
        $locations = Location::all();

        $response = $locations;
        return response()->json($response,200) ;
    }
    public function store(Request $request)
    {
       $location =new Location;
           $location->name = $request->name;
           $location->state_id = $request->state_id;
         
           $location->save();

            $response = $location;
            return response()->json($response,200) ;
       
    }
     public function show_location_by_id($state_id)
    {
        $location = location::all()->where('state_id','=', $state_id );
        if (isset($location)) {
        $response = $location->values();
        return response()->json($response,200) ;
        }
        $response =$location->values();
        return response()->json($response,404) ;
    }
}
