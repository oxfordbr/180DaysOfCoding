<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::truncate();

		User::create([
			'username' => 'BrendanOxford',
			'email' => '',
			'password' => '1234'
		]);

		User::create([
			'username' => 'FridaOxford',
			'email' => '',
			'password' => '1234'
		]);
	}
}