<?php

class DiaTableSeeder extends Seeder {

	public function run()
	{

			Dia::create([
				'dia' => 'lunes'
			]);

			Dia::create([
				'dia' => 'martes'
			]);

			Dia::create([
				'dia' => 'miercoles'
			]);

			Dia::create([
				'dia' => 'jueves'
			]);

			Dia::create([
				'dia' => 'viernes'
			]);

	}

}