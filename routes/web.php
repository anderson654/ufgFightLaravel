<?php

use App\Http\Controllers\WebApplication\AuthController;
use App\Http\Controllers\WebApplication\DashBoardController;
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
    return view('index');
});

Route::get('/login', function () {
    return view('site.login.login');
})->name('login');

Route::get('/signup', function () {
    return view('site.signature.newAccount');
})->name('signup');

Route::post('/register', [AuthController::class,'store'])->name('register');
Route::post('/login', [AuthController::class,'login'])->name('login');


Route::group(['middleware' => 'auth'], function () {
    // Rotas que requerem autenticação
    Route::post('/logout', [AuthController::class,'logout'])->name('logout');

    Route::resources([
		'dashboard' => DashBoardController::class
	]);
});
