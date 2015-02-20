<?php

class GrupoTableSeeder extends Seeder {

	public function run()
	{

		Grupo::create([
			'turno_id' => '1',
			'grupo' => '201',
			'especialidad' => 'Logistica'
		]);

		Grupo::create([
			'turno_id' => '1',
			'grupo' => '203',
			'especialidad' => 'Soprte y M.'
		]);

		Grupo::create([
			'turno_id' => '1',
			'grupo' => '401',
			'especialidad' => 'Logistica'
		]);

		Grupo::create([
			'turno_id' => '1',
			'grupo' => '403',
			'especialidad' => 'Soprte y M.'
		]);

		Grupo::create([
			'turno_id' => '1',
			'grupo' => '601',
			'especialidad' => 'Logistica'
		]);

		Grupo::create([
			'turno_id' => '1',
			'grupo' => '603',
			'especialidad' => 'Soprte y M.'
		]);

		Grupo::create([
			'turno_id' => '2',
			'grupo' => '202',
			'especialidad' => 'Logistica'
		]);

		Grupo::create([
			'turno_id' => '2',
			'grupo' => '204',
			'especialidad' => 'Soprte y M.'
		]);

		Grupo::create([
			'turno_id' => '2',
			'grupo' => '402',
			'especialidad' => 'Logistica'
		]);

		Grupo::create([
			'turno_id' => '2',
			'grupo' => '404',
			'especialidad' => 'Soprte y M.'
		]);

		Grupo::create([
			'turno_id' => '2',
			'grupo' => '602',
			'especialidad' => 'Logistica'
		]);

		Grupo::create([
			'turno_id' => '2',
			'grupo' => '604',
			'especialidad' => 'Soprte y M.'
		]);

	}

}