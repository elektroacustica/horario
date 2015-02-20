<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCargasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cargas', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('docente_id')->unsigned();
			$table->foreign('docente_id')->references('id')->on('docentes')->onDelete('cascade');

			$table->integer('materia_id')->unsigned();
			$table->foreign('materia_id')->references('id')->on('materias')->onDelete('cascade');

			

			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cargas');
	}

}
