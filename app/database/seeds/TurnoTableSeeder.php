<?php

class TurnoTableSeeder extends Seeder {

	public function run()
	{
			Turno::create([
				'turno' => 'Vespertino'
			]);

			Turno::create([
				'turno' => 'Matutino'
			]);
	}

}