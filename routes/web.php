<?php

//Static pages from the first few episodes
Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

//Projects
Route::resource('projects', 'ProjectsController');

//Route::get('/projects', 'ProjectsController@index');
//
//Route::get('/projects/create', 'ProjectsController@create');
//
//Route::get('/projects/{project}', 'ProjectsController@show');
//
//Route::post('/projects/', 'ProjectsController@store');
//
//Route::patch('/projects/{project}/edit', 'ProjectsController@edit');
//
//Route::delete('/projects/{project}', 'ProjectsController@destroy');
