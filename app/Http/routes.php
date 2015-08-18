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
Route::post('dashboard','HomeController@indexp');
//Super admin reg  Route Start
Route::get('adminreg/{eid}','HomeController@adminregget');
Route::post('adminreg/{eid}','HomeController@adminregpost');
//Super admin reg  Route End

//Admin Profile View Edit Delete Start
Route::get('adminprofile/{eid}','HomeController@adminprofileget');
Route::post('adminprofile/{eid}','HomeController@adminprofileupdatepost');
//Admin Profile View Edit Delete End
//Password Change Route start
Route::get('changepass/{eid}','HomeController@changepassget');
Route::post('changepass/{eid}','HomeController@changepasspost');
//Password Change Route End
//Header add Route Start
Route::get('header/{eid}','HomeController@headerget');
Route::post('header/{eid}','HomeController@headerpost');
//Header add Route End
//ClientReg Route Start
Route::get('reg','HomeController@regget');
Route::post('reg','HomeController@regpost');
//ClientReg Route End
//Route AddTicket  Start
Route::get('ticket/{eid}','ModelController@addticketget');
Route::post('ticket/{eid}','ModelController@addticketpost');
//Route AddTicket  End
//Add CarModel info Route Start
Route::get('addmodel','ModelController@addmodelget');
Route::post('addmodel','ModelController@addmodelpost');
//Add CarModel Route End
//Route Generate Ticket Start
//Route::get('tktgenerate','ModelController@tktgenerateget');
Route::get('tk1','ModelController@tk1get');
Route::post('tk1','ModelController@tk1post');
//Route Generate Ticket End

//Route second one modal start TEST
//Route::post('diagnosis',['as'=>'dnosis','uses'=>'ModelController@diagnosisget']);
//Route second one modal End