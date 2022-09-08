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

// contact data save on database
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


// newsletter data save on database

Route::get('/newsletter', function () {
    return view('newsletter.newsletter');
})->name('newsletter');

Route::post('/newsletter', function (Request $request) {

    $newsletter = new App\Models\newslatter;


    $newsletter->email = request('email');

    $newsletter->save();
    return 'MERCI DE VOUS AVOIR ABONNER A KNOWLEDGE TECHNOLOGY!';
});


// Formulaire data save on database
Route::post('/formulaire', function (Request $request) {

    $formulaire = new App\Models\formulaire_Etudiant;


    $formulaire->nom = request('nom');
    $formulaire->prenom = request('prenom');
    $formulaire->date_Naissance = request('date_Naissance');
    $formulaire->prefecture = request('prefecture');
    $formulaire->sexe = request('sexe');
    $formulaire->numeroTel = request('numeroTel');
    $formulaire->email = request('email');
    $formulaire->fichiers = request('fichiers');
    $formulaire->filiere = request('filiere');

    $formulaire->save();

    return  'votre nom  est:'. Request('nom').  
            'et votre nom est:' . Request('prenom'). 
            'votre date de Naissance est:'. Request('date_Naissance'). 
            'votre Prefecture est:'. Request('prefecture'). 
            'Votre est sexe :'. Request('sexe').
            'Votre numero de telephone est :'. Request('numeroTel').
            'Votre email est :'. Request('email'). 
            'Vous avez envoyez le fichier suivant :'. Request('fichiers'). 
            'Vous avez comme filière :'. Request('filiere') ;
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
