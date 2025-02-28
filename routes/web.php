<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;
use Illuminate\Auth\Events\Logout;

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
    $user = Auth::user();
    return view('index', ['user' => $user]);
});

Route::get('/main', function() {
    $user = Auth::user();
    return view('main',  ['user' => $user]);
})->name('main')->middleware('auth');

Route::get('/main', [TaskController::class, 'displayTable'])->name('main')->middleware('auth');

Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class, 'login'])->name('login.submit');
Route::post('/create-task', [TaskController::class, 'createTask'])->name('create-task');
Route::put('/edit-task/{task}', [TaskController::class, 'updatedTasks']);
Route::get('/edit-task/{task}', [TaskController::class, 'showEditScreen']);

Route::get('/register', function() {
    return view('register');
});

Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');

Route::post('/logout', [UserController::class, 'logout']);
Route::delete('/delete-task/{task}', [TaskController::class, 'deletedTask']);
