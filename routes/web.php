<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('http-client', function() {
    $response = Http::get('https://api.github.com/users/bryansiegel/repos?sort=created&per_page=3');

    return view('http-client', [
        'repos' => $response->json(),

    ]);
    


});
