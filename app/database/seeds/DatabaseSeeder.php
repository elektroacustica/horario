<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('DocenteTableSeeder');
		$this->call('AulaTableSeeder');
		$this->call('MateriaTableSeeder');
		$this->call('HoraTableSeeder');
		$this->call('TurnoTableSeeder');
		$this->call('GrupoTableSeeder');
		$this->call('DiaTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('CicloTableSeeder');
	}

}
