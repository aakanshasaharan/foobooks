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
    return view('welcome');
});


Route::get('/books', function () {
    return "Here are all the books in the fooobooks.";
});


Route::get('/bio', function () {
    return "Here is the bio for all the participants.";
});

Route::get('/people', function () {
    return "No of people could go upto 1000.";
});


Route::get('/detail', function () {
    return "what are the details.";
});

