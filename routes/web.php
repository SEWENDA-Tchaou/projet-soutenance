<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('/', function () {
    return view('acceuil');
})->name('acceuil');

Route::get('/layouts', function () {
    return view('layouts.formation');
})->name('formation');

Route::get('/login', function () {
    return view('passwords.login');
})->name('login');


Route::get('/formulaire', function () {
    return view('layouts.formulaire');
})->name('formulaire');

Route::get('/contact', function () {
    return view('layouts.contact');
})->name('contact');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
