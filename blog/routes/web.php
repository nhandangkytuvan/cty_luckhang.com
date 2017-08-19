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
use Jenssegers\Agent\Agent;

Route::get('/', function () {
	$agent = new Agent();
	if($agent->isMobile()){
		return view('luckhangcom.mobile.home');
	}else{
    	return view('luckhangcom.desktop.home');
	}
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
