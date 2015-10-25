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

Route::get('/', 'HomeController@index');

Route::get('affiliates', 'AffiliateController@index');

Route::get('terms', 'TermsController@index');

Route::get('privacy', 'PrivacyController@index');

Route::post('registration', 'RegisterController@index');

Route::get('sign_in', 'SignInController@index');

Route::post('contact', 'ContactController@index');

Route::get('/secure/user', 'UserAdminController@index');
