<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
class StateController extends Controller
{
   public function index()
    {
        $states = State::all();

        $response = $states;
        return response()->json($response,200) ;
    }
    public function store(Request $request)
    {
       $state =new State;
           $state->name = $request->name;
           $state->save();

            $response = $state;
            return response()->json($response,200) ;           
    }
}
