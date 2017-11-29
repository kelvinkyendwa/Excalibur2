<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/trailers', function () {
  return view('trailers.index');
});


Route::resource('/movies', 'MovieController');


Route::get('/series', function()
{
  return view('series.index');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('logout', function()
{
  Auth::logout();
  return redirect('/');

})->name('logout');