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
    $comics = config('comics');
    return view('home', compact('comics'));
})->name('home');

Route::get('/show/{id}', function ($id) {
    $comics = config('comics');

    if(!is_numeric($id) || $id < 0 || $id >= count($comics)){
        abort(404);
    };

    $prev = $id == 0 ? count($comics) - 1 : $id - 1;
    $next = $id == count($comics) - 1 ? 0 : $id + 1;

    $comic = $comics[$id];
    return view('comics.show', compact('comic', 'prev', 'next'));
})->name('show');
