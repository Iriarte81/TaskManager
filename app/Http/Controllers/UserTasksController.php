<?php namespace App\Http\Controllers;

use App\Task;
use View;
use App\User;

class UserTasksController extends Controller {

public function index($username) {

	$tasks = Task::byUsername($username);
	// $tasks = User::byUsername($username)->tasks;

	return View::make('tasks.index', compact('tasks'));
}

public function show($username, $taskId) {

	$task = Task::find($taskId, $username);

	//$task = User::byUsername($username)->tasks()->findOrFail($taskId);
	
	return View::make('tasks.show', compact('task'));
}
}
