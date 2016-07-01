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

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/gallery', function () {
    return view('pages.gallery');
});
Route::get('/contact', function () {
    return view('pages.contact');
});

/*** Upload****/
Route::get('upload', function() {
 return view('pages.upload');
});

Route::post('apply/upload', 'FileUploadController@upload');

/***Car pages****/
Route::get('/cars', [
			    'uses' => 'CarsController@main'
			]);
Route::get('/cars/{car_type}', [
			    'uses' => 'CarsController@types'
			]);
Route::get('/cars/{car_type}', [
			    'uses' => 'CarsController@types'
			]);
/***News pages****/
Route::get('/news', [
			    'uses' => 'NewsController@main'
			]);
Route::get('/news/{categ}', [
			    'uses' => 'NewsController@categ'
			]);
Route::get('/news/{categ}/{page}', [
			    'uses' => 'NewsController@categ'
			]);
/***Tools pages****/
Route::get('/tools', [
			    'uses' => 'ToolsController@main'
			]);
Route::get('/tools/{categ}', [
			    'uses' => 'ToolsController@categ'
			]);
Route::get('/tools/{categ}/{page}', [
			    'uses' => 'ToolsController@categ'
			]);
/*** Saeving traffic****/
Route::post('/analitic','StatisticsController@saveRequest');



/***Admin pages****/
Route::group(['prefix' => 'backend', 'before' => 'auth'], function()
{

           Route::get('/', [
			    'middleware' => 'auth',
			    'uses' => 'Backend\ReportsController@main'
			]);
          
           Route::get('/logout', [
			    'middleware' => 'auth',
			    'uses' => 'Auth\AuthController@logout'
			]);
           
           Route::post('/select-type', [
			    'middleware' => 'auth',
			    'uses' => 'Backend\ReportsController@ajaxReport'
			]);
           
           
   
	
});

Route::auth();

Route::get('/home', 'HomeController@index');
