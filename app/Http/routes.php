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
Route::get('home', function () {
    return view('home');
});
Route::get('dashboard', function () {
    return view('dashboard');
});
Route::get('viewinventory', function () {
    return view('inventoryview');
});
Route::get('departments', function () {
    return view('departments');
});
Route::get('location', function () {
    return view('location');
});
Route::get('division', function () {
    return view('division');
});
Route::get('equipment', function () {
    return view('equipment');
});
Route::get('transfer', function () {
    return view('transfer');
});
Route::get('audit', function () {
    return view('audit');
});
Route::get('locationtracker', function () {
    return view('locationtracker');
});
