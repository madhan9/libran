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
Route::post('/contact-mail', [App\Http\Controllers\FormController::class, 'contactMail']);


Route::get('/login', function () {
    return view('auth.login');
});


Route::get('/register', function () {
    return view('auth.register');
});

Route::group(['middleware' => ['auth']], function () { 
	Route::get('/form', function () {
	    return view('forms.form');
	});

  	Route::post('/form-save', [App\Http\Controllers\FormController::class, 'store']);



  	Route::get('/epf-form', function () {
	    return view('forms.epf_form');
	});

  	Route::post('/epf-form-save', [App\Http\Controllers\FormEPFController::class, 'store']);
});



Auth::routes();



