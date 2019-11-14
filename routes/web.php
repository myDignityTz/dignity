<?php

Auth::routes();

Route::get("/", "WelcomeController")->name("welcome");
Route::get("about", "AboutController")->name("about");
Route::view("techniques", "techniques")->name("techniques");
Route::view("experience", "experience")->name("experience");
Route::get("letter", "LetterController")->name("letter");
Route::view("girls", "girls")->name("girls");
Route::view("topics", "topics")->name("topics");
Route::view("team", "team")->name("team");

Route::get('/home', 'HomeController@index')->name('home');
