<?php

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('pageAcceuil');
// Route::get('/contact', function () {
//     return view('contact');
// })->name('pageContact');
// // Route::get('/profile/{nom}/{prenom}/{age?}', function ($nom,$prenom,$age=55) {
// //     echo'welcome'.' '.$nom.' '.$prenom.' '.$age.':'.' '.$age;
// // });
// Route::get('profile/{nom}/{prenom}/{age?}',function($nom,$prenom,$age=25){
// 	return view('pages.profile',[
// 		'nom'=>$nom,
// 		'prenom'=>$prenom,
// 		'age'=>$age
// 		]);
// })->name('monProfile');;
Route::get('/','PagesController@index')->name('pageAcceuil');
Route::get('/contact','PagesController@contact')->name('pageContact');

Route::get('/category','CategoriesController@ajouterCateg')->name('ajouterCateg');
Route::post('/category','CategoriesController@postajouterCateg')->name('post_ajouter_Category');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



 Route::middleware(['auth'])->group(function(){
	Route::get('/livre','LivresController@ajouterLivre')->name('ajouter_Livre');
Route::post('/livre','LivresController@postajouterLivre')->name('post_ajouter_Livre');
Route::get('/livre/{livre}','LivresController@supprimerLivre')
->middleware('auth')
->name('get_supprimer_Livre');
Route::get('/voirLivre/{id}','LivresController@voirLivre')->name('voirLivre');
Route::get('/editerLivre/{id}','LivresController@editerLivre')->name('editerLivre');
Route::post('/editerLivre/{id}','LivresController@updateLivre')->name('update_Livre');
    //
 });



 ///////pour la recherche 
 Route::get('livres_par_categ/{id}','CategoriesController@livresCateg')->name('par_Livre');