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
//Initially /comingsoon
Route::get('/comingsoon', function () {
    return view('comingsoon');
});
Route::get('/forgot_password', function () {
    return view('forgotpassword');
});
Route::get('/meeting', function () {
    return redirect('/timer');
});
Route::get('/register', function () {
    return view('closed');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::put('/payment/upload', 'HomeController@submitPayment');
Route::put('/home/update/sch', 'HomeController@updateSch')->name('user_update_sch');
Route::get('/timer', 'HomeController@timer')->name('timer');
Route::put('/payment/upload','HomeController@submitPayment');
Route::post('/reregister','HomeController@reregister');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes... (register-beta is register)
Route::get('register/susulan', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register/susulan', 'Auth\RegisterController@register');

// Register IG
// Route::get('register/ig','VisitController@showRegistrationForm');
// Route::post('register/ig','VisitController@register')->name('register-ig');

// Password Reset Routes...
Route::get('reset', 'HomeController@showReset');
Route::post('reset/{user}', 'HomeController@reset');

//Admin Routes
Route::get('admin', 'AdminController@index')->name('admin');
Route::get('admin/downloadAll', 'AdminController@downloadAll')->name('downloadAll');
Route::get('admin/downloadKMG', 'AdminController@downloadKMG')->name('downloadKMG');
Route::get('admin/downloadALS', 'AdminController@downloadALS')->name('downloadALS');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//Superadmin Routes
Route::get('superadmin', 'SuperadminController@index')->name('superadmin');
Route::get('superadmin/downloadAll', 'SuperadminController@downloadAll')->name('downloadAll');
Route::get('superadmin/downloadKMG', 'SuperadminController@downloadKMG')->name('downloadKMG');
Route::get('superadmin/downloadALS', 'SuperadminController@downloadALS')->name('downloadALS');
Route::get('superadmin/downloadReg', 'SuperadminController@downloadReg')->name('downloadReg');
Route::get('schedule', 'SuperadminController@schedule')->name('schedule');
Route::get('edit/{user}', 'SuperadminController@edit')->name('edit');
Route::put('update/{user}', 'SuperadminController@update')->name('update');
Route::delete('delete', 'SuperadminController@delete')->name('delete');
Route::get('edit/sch/{schedule}', 'SuperadminController@sch_edit')->name('sch_edit');
Route::put('update/sch/{schedule}', 'SuperadminController@sch_update')->name('sch_update');
Route::delete('delete/sch', 'SuperadminController@sch_delete')->name('sch_delete');
Route::get('add/sch', 'SuperadminController@sch_create')->name('sch_create');
Route::post('store/sch', 'SuperadminController@sch_store')->name('sch_store');
Route::get('blast_email', 'SuperadminController@send_mail');
Route::post('change_session/{user}', 'SuperadminController@changeSession')->name('change_session');
Route::post('resetpass/{user}','SuperadminController@resetPass')->name('reset_pass');
Route::get('verify', 'SuperadminController@showVerify')->name('showVerify');
Route::post('verify/{user}', 'SuperadminController@verify')->name('verify');
Route::get('viewMember','SuperadminController@viewMember')->name('viewMember');
