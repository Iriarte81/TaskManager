<?php namespace App\Http\Controllers;

use App\Task;
use View;
use App\User;

class UserTasksController extends Controller {

public function index($username) {

	$tasks = User::whereUsername($username)->first()->tasks;

	return View::make('tasks.index', compact('tasks'));
}
}
