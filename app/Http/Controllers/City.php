<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grad;

class City extends Controller
{
    public function createCity(Request $request){
        
        if($request->has('name') && $request->has('avgincome')) {
            $city = new Grad();
            $city->name = $request->name;
            $city->avgincome = $request->avgincome;
            $city->save();
            return response('City created', 200)->header('Content-Type', 'text/plain');
        } else {
            return response('Not all required fields provided', 400)->header('Content-Type', 'text/plain');
        }
    }

}