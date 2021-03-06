<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
// use resources\views\

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
    return view('index');
});

// Route::view('add','addmember');

Route::post('/',[DataController::class,'addData']);

// Route::view('index','index');

Route::get('list',[DataController::class,'show']);