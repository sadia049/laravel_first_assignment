<?php

use App\Http\Controllers\module14Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/hello',[module14Controller::class,'sevenInOne']);
Route::get('/hello{page?}',[module14Controller::class,'sevenInOne']);


Route::post('/submit/{email?}',function($email):JsonResponse{

    $em=$email;

    $my_array = ["success"=> "true", "message" => "form submitted successfully"];
    return response()->json($my_array);

    

});
