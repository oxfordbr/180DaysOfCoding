<?php

//use Acme\Services\TaskCreatorService;

class TasksController extends BaseController {

	/*protected $taskCreator;

	public function __construct(TaskCreatorService $taskCreator) {
		$this->taskCreator = $taskCreator;
	}*/

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
		// Validation method using model (see Task model and BaseModel)
		$task = new Task(Input::all());

		if (! $task->save()) {
			return Redirect::back()->withInput()->withErrors($task->getErrors());
		}

		// Validation method using exceptions (see Acme folder)
		/*try {
			$this->taskCreator->make(Input::all());
		} catch (Acme\Validators\ValidationException $e) {
			return Redirect::back()->withInput()->withErrors($e->getErrors());
		}*/

		return Redirect::home();
		
	}

	public function update($id) {
		$task = Task::find($id);
		$task->completed = Input::get('completed') ? Input::get('completed') : 0;
		$task->save();

		return Redirect::home();
	}
}