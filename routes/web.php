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
    return view('home');
    //return view('welcome');
});

Route::get('/register', [UserController::class, 'registerPage']);

Route::get('/login', [UserController::class, 'loginPage']);

//Route::post('api/register', [UserController::class, 'apiRegister']);

// FOR TESTING
Route::post('/register', [UserController::class, 'registerUser']);