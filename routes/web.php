<?php

Auth::routes();

Route::view("/", "welcome")->name("welcome");
Route::view("about", "about")->name("about");
Route::view("techniques", "techniques")->name("techniques");
Route::view("experience", "experience")->name("experience");
Route::view("letter", "letter")->name("letter");
Route::view("girls", "girls")->name("girls");
Route::view("topics", "topics")->name("topics");
Route::view("team", "team")->name("team");

Route::get('/home', 'HomeController@index')->name('home');
