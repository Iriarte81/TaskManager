<?php namespace App\Acme\Services;

use App\Acme\Validators\TaskValidator;
use App\Task;
use App\Acme\Services\ValidationException;
use Redirect;

class TaskCreatorService {

	protected $validator;

	public function __construct(TaskValidator $validator) {

		$this->validator = $validator;
	
	}


	public function make(array $attributes) {

		//deterine if data is valid
		if ($this->validator->isValid($attributes)) {
		// create a new task

			Task::create([
				'title' => $attributes['title'],
				'body' => $attributes['body'],
				'user_id' => $attributes['assign']
				]);

			return true;

		}

		// if not throw exception

		throw new ValidationException('Task validation failed', $this->validator->getErrors());

	}
}