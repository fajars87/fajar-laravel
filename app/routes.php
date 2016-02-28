<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::get('home', function()
{
	return View::make('home');
});

Route::get('notes', function()
{
	return View::make('notes');
});

Route::get('work', function()
{
	return View::make('work');
});

Route::get('about', function()
{
	return View::make('about');
});

Route::get('contact', function()
{
	return View::make('contact');
});

Route::get('admin', function()
{
	return 'None';
});