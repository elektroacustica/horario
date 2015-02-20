<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class DocenteTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 9) as $index)
		{
			Docente::create([
				'nombres'	=> $faker->name($gender = 'female'),
			]);
		}
	}

}