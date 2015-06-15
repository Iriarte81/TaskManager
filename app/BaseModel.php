<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use App\Acme\Validators\Validator;
use Validator as V;

class BaseModel extends Model {

	protected $errors;

	
	public static function boot() {

		parent::boot();

		static::saving(function($model) {

			return $model->validate();
		});
	}



	public function validate() {

		$validation = V::make($this->getAttributes(), static::$rules);

		if ($validation->fails()) {

			$this->errors = $validation->messages();

			return false;
		}


		return true;

	}


	public function getErrors()
	{
		return $this->errors;
	}

}