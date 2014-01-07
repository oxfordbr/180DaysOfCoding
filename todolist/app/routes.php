<?php

Route::get('/', ['as' => 'home', 'uses' => 'TasksController@index']);
Route::get('tasks/{id}', 'TasksController@show')->where('id', '\d+');

Route::get('{username}/tasks', 'UserTasksController@index');
Route::get('{username}/tasks/{id}', ['as' => 'user.tasks.show', 'uses' => 'UserTasksController@show']);

/*Route::get('{username}/tasks', function($username) {
	$user = User::whereUsername($username)->first();
	return $user->tasks;
});

Route::get('{username}/tasks/{id}', function($username, $id) {
	//fund task by id
	$user = User::with('tasks')->whereUsername($username)->first();
	$task = $user->tasks;
	
	// load view
	return View::make('tasks.show', compact('user', 'task'));
});*/