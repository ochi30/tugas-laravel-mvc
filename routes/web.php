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

/*Route::get('/home', function () {
    return view('welcome');
});
Route::get('/test/{angka}', function ($angka) {
    return view('test',["angka"=>$angka]);
});
Route::get('/halo/{nama}', function ($nama) {
    return "<h1>halo ".$nama."</h1>";
});*/
Route::get('/',"Homecontroller@home");
Route::get('/register','Authcontroller@register');
Route::post('/welcome','Authcontroller@welcome');