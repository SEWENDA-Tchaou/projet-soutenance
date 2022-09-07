<?php

use Illuminate\Http\Request;
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

Route::post('/contact', function (Request $request) {

        $renseignements = new App\Models\renseignement;


        $renseignements->nom = request('nom');
        $renseignements->prenom = request('prenom');
        $renseignements->email = request('email');
        $renseignements->numeroTel = request('numeroTel');
        $renseignements->contenu_message = request('contenu_message');

        $renseignements->save();

    return 'votre nom  est:'. Request('nom').  'et votre nom est:' . Request('prenom'). 'votre mail est:'. Request('email'). 'votre numero est:'. Request('numeroTel'). 'le messageest :'. Request('contenu_message') ;
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
