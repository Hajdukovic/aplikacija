<?php

use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/addpatient', 'App\Http\Controllers\PatientsController@create')->name('patient.create');
    Route::post('/addpatient', 'App\Http\Controllers\PatientsController@store')->name('patient.store');

    Route::get('/adddoctor', 'App\Http\Controllers\DoctorsController@create')->name('doctor.create');
    Route::post('/adddoctor', 'App\Http\Controllers\DoctorsController@store')->name('doctor.store');


    Route::get('/controls', 'App\Http\Controllers\ControlsController@index')->name('control.show');

    Route::get('/addcontrol', 'App\Http\Controllers\ControlsController@create')->name('control.create');
    Route::post('/addcontrol', 'App\Http\Controllers\ControlsController@store')->name('control.store');
});
