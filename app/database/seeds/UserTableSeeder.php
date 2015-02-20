<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create([
			'username'  => 'admin',
            'email'     => 'admin@hotmail.com',
            'name'		=> 'Administrator',
            'password' 	=> Hash::make('admin')
		]);
	}

}