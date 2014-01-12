<?php namespace Acme\Services;

use Acme\Validators\TaskValidator;
use Acme\Validators\ValidationException;
use Task;

class TaskCreatorService {

	protected $validator;

	public function __construct(TaskValidator $validator) {
		$this->validator = $validator;
	}

	public function make(array $attributes) {
		// determine if data is valid
		if ($this->validator->isValid($attributes)) {
			// create new task
			Task::create([
				'title' => $attributes['title'],
				'body' => $attributes['body'],
				'user_id' => $attributes['user_id']
			]);

			return true;
		}
		
		throw new ValidationException('Task Validation Failed', $this->validator->getErrors());
	}
}