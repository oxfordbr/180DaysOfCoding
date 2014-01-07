<?php

class UserTasksController extends BaseController {
	public function index($username) {
		$tasks = Task::byUsername($username);

		return View::make('tasks.index', compact('tasks'));
	}

	public function show($username, $taskId) {
		//grab task by id associated with user
		$task = Task::find($taskId, $username);

		//load view
		return View::make('tasks.show', compact('task'));
	}
}