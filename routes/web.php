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

Auth::routes();

Route::get('/', function () {
  return view('home');
})->name('home');

Route::get('/songs/1', function () {
  return view('songs.detail');
})->name('songs.detail');

Route::get('/songs/create', function () {
  return view('songs.create');
})->name('songs.create');

Route::get('/playlists/1', function () {
  return view('playlists.detail');
})->name('songs.detail');

Route::get('/users/1', function () {
  return view('artists.detail');
})->name('artists.detail');

Route::get('/search', function () {
  return view('search.index');
})->name('search');