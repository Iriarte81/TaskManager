<?php
use App\User;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'TasksController@index']);
Route::post('/tasks', 'TasksController@store');
Route::get('tasks/{id}', 'TasksController@show')->where('id', '\d+');
Route::patch('tasks/{id}', ['as' => 'tasks.update', 'uses' => 'TasksController@update']);


Route::get('{username}/tasks', 'UserTasksController@index');

Route::get('{username}/tasks/{id}', ['as' => 'user.tasks.show', 'uses' => 'UserTasksController@show']);
/*Route::get('{username}/tasks', function($username) {

	//find user by their username from the users table
	$user = User::whereUsername($username)->first();

	//get all tasks associated with that user

	return $user->tasks;
	// to get the user to which the second task belongs
	// return Task::find(2)->user;

	//and return them
});

Route::get('{username}/tasks/{id}', function ($username, $id) {

// find the task by its id
$user = User::with('tasks')->whereUsername($username)->first();
$task = $user->tasks;
//$task = $user->tasks()->findorFail($id);

// and load a view to display it
return View::make('tasks.show', compact('user', 'task'));
});
/*Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/