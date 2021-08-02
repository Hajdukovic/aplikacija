<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use App\Models\Patient;
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

    Route::get('/profile', 'App\Http\Controllers\HomeController@profile')->name('profile.show');

    Route::get('/patient', 'App\Http\Controllers\PatientsController@show')->name('patient.show');
    Route::get('/addpatient', 'App\Http\Controllers\PatientsController@create')->name('patient.create');
    Route::post('/addpatient', 'App\Http\Controllers\PatientsController@store')->name('patient.store');
    Route::get('/patientedit/{id}', 'App\Http\Controllers\PatientsController@edit')->name('patient.edit');
    Route::post('/patientedit/{id}', 'App\Http\Controllers\PatientsController@update')->name('patient.update');

    Route::get('/adddoctor', 'App\Http\Controllers\DoctorsController@create')->name('doctor.create');
    Route::post('/adddoctor', 'App\Http\Controllers\DoctorsController@store')->name('doctor.store');

    Route::get('/controls', 'App\Http\Controllers\ControlsController@index')->name('control.show');
    Route::post('/controlsshow', 'App\Http\Controllers\ControlsController@controlsshow')->name('control.showall');
    Route::get('/addcontrol', 'App\Http\Controllers\ControlsController@create')->name('control.create');
    Route::post('/addcontrol', 'App\Http\Controllers\ControlsController@store')->name('control.store');
    Route::get('/editcontrol/{id}/{patient_id}', 'App\Http\Controllers\ControlsController@edit')->name('control.edit');
    Route::post('/updatecontrol/{id}', 'App\Http\Controllers\ControlsController@update')->name('control.update');

    Route::get('/patientsshow', 'App\Http\Controllers\PatientsController@patientsshow')->name('patients.showall');
    Route::get('/doctorsshow', 'App\Http\Controllers\DoctorsController@doctorsshow')->name('doctors.showall');


});
