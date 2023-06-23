<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainCont;
use App\Http\Controllers\Scrape;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('welcome');
});
// Route::get('/home', function($param1){
//     return view('welcome');
// })->where('param1', '[A-Za-z]');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/test', [MainCont::class, 'test']);
Route::any('/scrape_1', [Scrape::class, 'scrape_1']);

//every defined route needs to go above this point
Route::get('{param1}', function($param1){
    return view('error.error_1');
})->where('param1', '[A-Za-z]+');
Route::get('{param1}/{param2}', function($param1){
    return view('error.error_1');
})->where(['param1','param2'], '[A-Za-z]+');
