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

Route::get('/', 'SongController@index')->name('home');

Route::get('/songs/{song}', 'SongController@show')->name('songs.detail');

Route::get('/songs/create', function () {
  return view('songs.create');
})->name('songs.create');

Route::get('/playlists/{playlist}', 'PlaylistController@show')->name('playlists.detail');

Route::get('/users/{user}', 'UserController@show')->name('users.detail');

Route::get('/search', function () {
  return view('search.index');
})->name('search');