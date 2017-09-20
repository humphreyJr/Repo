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

Route::get('/test2', 'HomeController@index2');

Route::get('affiliates/{aff_id?}', 'AffiliateController@index');

Route::post('affiliates-thank-you', 'AffiliateController@affiliates_thank_you');

Route::get('terms', 'TermsController@index');

Route::get('one-thousand-challenge/{aff_id?}', 'OneThousandChallengeController@index');

Route::get('1kpromise/{aff_id?}', 'OneThousandChallengeController@index2');

Route::get('privacy', 'PrivacyController@index');

Route::get('profile', 'HomeController@profile');

Route::get('about-us', 'HomeController@about');

Route::get('what-is-emv-compliance', 'EMVController@index');

Route::get('what-are-merchant-services', 'StaticController@what_are_merchant_services');

Route::get('pos-partners', 'StaticController@pos_partners');

Route::get('credit-card-processing', 'StaticController@credit_card_processing');

Route::get('mobile-credit-card-processing', 'StaticController@mobile_credit_card_processing');

Route::get('credit-card-processing-providers', 'StaticController@credit_card_processing_providers');

Route::get('payment-terminals', 'StaticController@payment_terminals');

Route::get('merchant-solutions', 'StaticController@merchant_solutions');

Route::get('credit-card-fees-rates', 'StaticController@credit_card_fees_rates');

Route::get('pos-system', 'StaticController@pos_system');

Route::post('registration', 'RegisterController@index');

Route::get('registration', 'RegisterController@index');

Route::post('upload', 'RegisterController@index');

Route::get('upload', 'RegisterController@index');

Route::post('registration2', 'RegisterController@index2');

Route::get('registration2', 'RegisterController@index2');

Route::post('registration/signup/', 'RegisterController@create');

Route::post('registration/signup2/', 'RegisterController@create_step2');

Route::post('registration/complete_signup/', 'RegisterController@complete_signup');

Route::get('auth/login', 'SignInController@index');

Route::post('auth/login/action', 'SignInController@signin');

Route::post('contact', 'ContactController@index');

Route::get('subcategory/{category_id}', 'RegisterController@get_subcategory');

Route::post('subcategory/{category_id}', 'RegisterController@get_subcategory');

Route::get('/secure/user', [ 'middleware' => 'auth', 'uses' => 'UserAdminController@index']);

Route::post('/secure/user', [ 'middleware' => 'auth', 'uses' => 'UserAdminController@index']);

Route::post('/secure/user/accept_bid', [ 'middleware' => 'auth', 'uses' => 'UserAdminController@accept_bid']);

Route::get('/secure/user/pointofsales', [ 'middleware' => 'auth', 'uses' => 'UserPointOfSalesController@index']);

Route::get('/secure/user/settings', [ 'middleware' => 'auth', 'uses' => 'UserSettingsController@index']);

Route::post('/secure/user/settings/update', [ 'middleware' => 'auth', 'uses' => 'UserSettingsController@update']);

//Route::get('/admin', 'AdminController@index');

Route::get('/secure/logout', [ 'middleware' => 'auth', 'uses' => 'UserAdminController@logout']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
