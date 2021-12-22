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
//home
Route::get('/', function () {
    return view('welcome');
});

//application Main
Route::get('main','MainController@index')->middleware('title');  //accueil avec un middleware tout simple nommer title
Route::post('main','MainController@search')->name('search'); //gestion de recherche
Route::get('main/about/{id}','MainController@about');  //info sur un produit


//application Main Admin
Route::get('admin','AdminMainController@index')->name('index')->middleware('title');   //accueil pour l'admin avec un middleware title
Route::get('admin/about/{id}','AdminMainController@about');   //info sur un produit
Route::get('admin/create','AdminMainController@create');    //formulaire pour ajouter un produit
Route::post('admin/create','AdminMainController@store')->name('store');    //gestion d'insertion
Route::get('admin/delete/{id}','AdminMainController@delete');   //gestion de supprimation
Route::get('admin/edit/{id}','AdminMainController@edit');   //formulaire pour l'edition
Route::post('admin/edit/{id}','AdminMainController@update')->name('update');    //gestion de modification

Auth::routes();  //route pour les authentifications

//methode quand on appel un api externe
Route::get('main/getApi', 'MainController@getApi')->name('getApi');



