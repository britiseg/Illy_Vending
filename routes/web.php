<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
// use Illuminate\Support\Facades\Route;

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


Route::get('/', function () { return view('/layouts/main'); })->name('home');
Route::get('/program', function () { return view('main'); });
Route::get('/get-in-touch', function () { return view('get-in-touch.main'); })->name('get-in-touch');

