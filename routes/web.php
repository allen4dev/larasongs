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
Route::get('/logout', function () {
  auth()->logout();

  return redirect('login');
});

Route::get('/songs/create', 'SongController@create')->name('songs.create');
Route::get('/playlists/{playlist}/songs', 'AddSongController@create')->name('playlists.addsong');
Route::post('/playlists/{playlist}/songs', 'AddSongController@store');
Route::get('/songs/{song}', 'SongController@show')->name('songs.detail');
Route::post('/songs', 'SongController@store')->name('songs.store');
Route::post('/songs/{song}/comments', 'CommentController@store');

Route::get('/playlists/create', 'PlaylistController@create')->name('playlists.create');
Route::get('/playlists/{playlist}', 'PlaylistController@show')->name('playlists.detail');
Route::post('/playlists', 'PlaylistController@store')->name('playlists.store');

Route::get('/users/{user}', 'UserController@show')->name('users.detail');
Route::get('/users/{user}/playlists', 'PlaylistController@index')->name('users.playlists');

Route::get('/search', 'SearchController@index')->name('search');