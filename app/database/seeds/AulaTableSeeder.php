<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AulaTableSeeder extends Seeder {

	public function run()
	{

		Aula::create([
			"aula" => 'salon 1'
		]);

		Aula::create([
			"aula" => 'salon 2'
		]);

		Aula::create([
			"aula" => 'salon 3'
		]);

		Aula::create([
			"aula" => 'salon 4'
		]);

		Aula::create([
			"aula" => 'salon 5'
		]);

		Aula::create([
			"aula" => 'salon 6'
		]);

		Aula::create([
			"aula" => 'Soprte'
		]);

		Aula::create([
			"aula" => 'Usoso multiples'
		]);

		Aula::create([
			"aula" => 'Centro de computo'
		]);
	}

}