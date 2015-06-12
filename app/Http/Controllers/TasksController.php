<?php namespace App\Http\Controllers;

use App\Task;
use View;
use App\User;
use Input;
use Redirect;
use App\Acme\Services\TaskCreatorService;
use App\Acme\Services\ValidationException;

class TasksController extends Controller {


	public function __construct(TaskCreatorService $taskCreator) {
		$this->taskCreator = $taskCreator;
	}


	public function index() {

		// fetch all tasks
		$tasks = Task::with('user')->get();
		$users = User::lists('username', 'id');
		//$users = User::get(['id', 'username']);
		
		// load a view to display them
		return View::make('tasks.index', compact('tasks', 'users'));
	}

	public function show($id) {

		//return 'show task with id of ' . $id;

		$task = Task::findorFail($id);

		// load a view to display it

		return View::make('tasks.show', compact('task'));
	}

	public function store() {

	try {

		$this->taskCreator->make(Input::all());
	
	} catch (ValidationException $e) {
	
		return Redirect::back()->withInput()->withErrors($e->getErrors());
	}

		return Redirect::home();
	}
}
