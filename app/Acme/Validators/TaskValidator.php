<?php namespace App\Acme\Validators;

class TaskValidator extends Validator {

	protected static $rules = [
		'title' => 'required',
		'body' => 'required',
		'assign' => 'required'
		];
}