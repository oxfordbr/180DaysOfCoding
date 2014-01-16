<?php

Route::get('/', ['as' => 'home', 'uses' => 'TasksController@index']);
Route::post('/tasks', 'TasksController@store');
Route::put('tasks/{id}', ['as' => 'tasks.update', 'uses' => 'TasksController@update']);

Route::get('tasks/{id}', 'TasksController@show')->where('id', '\d+');
Route::get('{username}/tasks', 'UserTasksController@index');

Route::get('{username}/tasks/{id}', ['as' => 'user.tasks.show', 'uses' => 'UserTasksController@show']);
