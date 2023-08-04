<?php

use App\Http\Controllers\BrokerController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//broker
Route::get('/broker/add',[BrokerController::class,'BrokerAdd']);
Route::post('/broker/store',[BrokerController::class,'BrokerStore']);
Route::get('broker/{id}/edit',[BrokerController::class,'edit']);
Route::put('broker/{id}/update',[BrokerController::class,'update']);

//property
Route::get('/property/add',[BrokerController::class,'PropertyAdd']);
Route::post('/property/store',[BrokerController::class,'PropertyStore']);
Route::get('property/{id}/edit',[BrokerController::class,'pedit']);
Route::put('property/{id}/update',[BrokerController::class,'pupdate']);
