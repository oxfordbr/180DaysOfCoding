<?php

class TasksController extends BaseController {
	public function index() {
		// fetch all tasks
		$tasks = Task::with('user')->get();
		$users = User::lists('username', 'id');

		// load view to display them
		return View::make('tasks.index', compact('tasks', 'users'));
	}

	public function show($id) {
		// fetch single task
		$task = Task::findOrFail($id);
		
		// load a view to display it
		return View::make('tasks.show', compact('task'));
	}

	public function store() {
		$input = Input::all();

		Task::create([
			'title' => $input['title'],
			'body' => $input['body'],
			'user_id' => $input['assign']
		]);

		return Redirect::home();

		
	}
}