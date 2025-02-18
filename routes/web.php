<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('index');
});

Route::get('/main', function() {
    return view('main');
});

Route::get('/register', function() {
    return view('register');
});

Route::post('/register', [UserController::class, 'register']);


Route::get('/login', function() {
    return view('login');
});