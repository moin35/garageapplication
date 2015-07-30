<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('logout','HomeController@logout');

Route::get('/', 'HomeController@getlogin');
Route::post('/', 'HomeController@postlogin');

Route::get('dashboard','HomeController@index');
//Super admin reg  Route Start
Route::get('adminreg/{eid}','HomeController@adminregget');
Route::post('adminreg/{eid}','HomeController@adminregpost');
//Super admin reg  Route End

//Admin Profile View Edit Delete Start
Route::get('adminprofile/{eid}','HomeController@adminprofileget');
//Admin Profile View Edit Delete End
//Password Change Route start
Route::get('changepass/{eid}','HomeController@changepassget');
Route::post('changepass/{eid}','HomeController@changepasspost');
//Password Change Route End
//Header add Route Start
Route::get('header/{eid}','HomeController@headerget');
Route::post('header/{eid}','HomeController@headerpost');
//Header add Route End