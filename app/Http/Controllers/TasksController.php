<?php namespace App\Http\Controllers;

use App\Task;
use View;

class TasksController extends Controller {

	public function index() {

		// fetch all tasks
		$tasks = Task::with('user')->get();
		
		// load a view to display them
		return View::make('tasks.index', compact('tasks'));
	}

	public function show($id) {

		//return 'show task with id of ' . $id;

		$task = Task::findorFail($id);

		// load a view to display it

		return View::make('tasks.show', compact('task'));
	}
}