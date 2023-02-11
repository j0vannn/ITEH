<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Racun;
use App\Models\Client;

class RacunController extends Controller
{
    public function updateAccount(Request $request){
            $client = Client::where('JMBG',$request->jmbg)->firstOrFail();
            $racun = Racun::where('client',$client->id)->firstOrFail();
            $currentAmount = $racun->balance;
            if($request->type = 'add'){
                $racun->update(['balance'=>$currentAmount+$request->amount]);
                return response('Account balance updated', 200)->header('Content-Type', 'text/plain');
            }
            elseif($request->type = 'subtract'){
                $racun->update('balance',$currentAmount-$request->amount);
                return response('Account balance updated', 200)->header('Content-Type', 'text/plain');
            }
            else{
                return response('Invalid syntax', 400)->header('Content-Type', 'text/plain');
            }
    
 

}

public function test(Request $request){
    return response("jmbg je $request->type", 200)->header('Content-Type', 'text/plain');
}

}