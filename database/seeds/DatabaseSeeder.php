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
			'username' => 'Jose Iriarte',
			'email' => 'josemariairiarte@gmail.com',
			'password' => '1234'
			]);

		User::create([
			'username' => 'Hueti Iriarte',
			'email' => 'hueti@example.com',
			'password' => '1234'
			]);

        User::create([
            'username' => 'Mia Iriarte',
            'email' => 'mia@example.com',
            'password' => '1234'
        ]);

        User::create([
            'username' => 'Oli Iriarte',
            'email' => 'oli@example.com',
            'password' => '1234'
        ]);

    }

}
