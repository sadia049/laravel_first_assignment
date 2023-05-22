<?php

use App\Http\Controllers\module14Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/hello',[module14Controller::class,'sevenInOne']);
Route::get('/hello{page?}',[module14Controller::class,'sevenInOne']);
route::post('/submit/{email?}',[module14Controller::class,'sevenInOne']);
