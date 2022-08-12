<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Brand;
class brandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();

        $response = $brands;
        return response()->json($response,200) ;
    }
    public function store(Request $request)
    {
       $brand =new Brand;  
       $brand->name = $request->name;
       $brand->save();
       
        $response = $brand;
        return response()->json($response,200) ;   
    }

}


    