<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('halo', function(){
    return ["me" => "Tidak Muncul"];
});

//Route::get('halocontroller', [HeloController::class, 'index']);
//Route::resource('halocontroller', HeloController::class);
Route::resource('Author', AuthorController::class);
