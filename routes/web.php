<?php

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
    $comics = config('db-comics.comics');
    return view('products.home', compact('comics'));
})->name('homepage');

Route::get('/comics/{id}', function($id){
     $comics= config('db-comics.comics');
     $comic = $comics[$id];
     return view('products.comics', compact('comic'));
 })->name('comic');
