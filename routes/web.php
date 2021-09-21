<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FerreteriaController;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

// Route::get('/ferreteria', function () {
//     return view('ferreteria.index');
// });

// Route::get('ferreteria/create', [FerreteriaController::class,'create']);


Route::resource('ferreteria', FerreteriaController::class);
Auth::routes();
Route::get('/home', [FerreteriaController::class, 'index'])->name('home');

Route::group(['middleware'=> 'auth'], function(){

    Route::get('/', [FerreteriaController::class, 'index'])->name('home');
});