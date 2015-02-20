<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class HoraTableSeeder extends Seeder {

	public function run()
	{

		Hora::create([
			'hora'	=> 'h1 7:00 - 8:00',
			'alias'	=> '7'
		]);

		Hora::create([
			'hora'	=> 'h2 8:00 - 9:00',
			'alias'	=> '8'
		]);

		Hora::create([
			'hora'	=> 'h3 9:00 - 10:00',
			'alias'	=> '9'
		]);


		Hora::create([
			'hora'	=> 'h4 10:00 - 11:00',
			'alias'	=> '10'
		]);

		Hora::create([
			'hora'	=> 'h5 11:00 - 12:00',
			'alias'	=> '11'
		]);

		Hora::create([
			'hora'	=> 'h6 12:00 - 13:00',
			'alias'	=> '12'
		]);

		Hora::create([
			'hora'	=> 'h7 13:00 - 14:00',
			'alias'	=> '1'
		]);

		Hora::create([
			'hora'	=> 'h8 1:00 - 2:00',
			'alias'	=> '1'
		]);

		Hora::create([
			'hora'	=> 'h9 2:00 - 3:00',
			'alias'	=> '2'
		]);

		Hora::create([
			'hora'	=> 'h10 3:00 - 4:00',
			'alias'	=> '3'
		]);

		Hora::create([
			'hora'	=> 'h11 4:00 - 5:00',
			'alias'	=> '4'
		]);

		Hora::create([
			'hora'	=> 'h12 5:00 - 6:00',
			'alias'	=> '5'
		]);

		Hora::create([
			'hora'	=> 'h13 6:00 - 7:00',
			'alias'	=> '6'
		]);

		Hora::create([
			'hora'	=> 'h13 7:00 - 8:00',
			'alias'	=> '7'
		]);

	}

}