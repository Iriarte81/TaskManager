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

Route::get('tasks/{id}', 'TasksController@show')->where('id', '\d+');

Route::get('{username}', function($username) {

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
$user = User::whereUsername($username)->first();
$task = $user->tasks()->findorFail($id);

// and load a view to display it
return View::make('tasks.show', compact('task'));
});
/*Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/
