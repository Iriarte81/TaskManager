<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UsersTableSeeder');

		$this->command->info('User table seeded');
	}

}

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		User::truncate();

		User::create([
			'username' => 'JeffreyWay',
			'email' => 'Jeffrey@laracasts.com',
			'password' => '1234'
			]);

		User::create([
			'username' => 'AllieWay',
			'email' => 'Allie@laracasts.com',
			'password' => '1234'
			]);

	}

}
