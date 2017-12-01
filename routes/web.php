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
Route::post('login', 'HomeController@doLogin');
Route::get('login', 'HomeController@login');
Route::get('logout', 'HomeController@doLogout');
Route::get('register', 'HomeController@register');
Route::get('/', "HomeController@index");
Route::resource('cursos', "CursosController");
Route::resource('clientes', "ClienteController");
Route::resource('inscripciones', "InscripcionController");
Route::resource('users_admin', "UserController");