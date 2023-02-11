<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\City;
use App\Http\Resources\ClientInfoResource;
use App\Http\Controllers\RacunController;
use App\Models\User;
use App\Models\Client;
use App\Models\Racun;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/clients', function(){
    return ClientInfoResource::collection(Client::all());

});

Route::get('/clients/{jmbg}',[ClientController::class, 'getClient']);

Route::get('/clientss/{jmbg}',function($jmbg){
    return new ClientInfoResource(Client::where('JMBG',$jmbg)->first());
});

Route::post('/cities/post',[City::class, 'createCity']);


Route::post('/accounts/update',[RacunController::class, 'updateAccount']);

