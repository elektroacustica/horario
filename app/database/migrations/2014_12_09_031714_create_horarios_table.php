<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHorariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('horarios', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('hora_id')->unsigned();
			$table->foreign('hora_id')->references('id')->on('horas')->onDelete('cascade');

			$table->integer('materia_id')->unsigned();
			$table->foreign('materia_id')->references('id')->on('materias')->onDelete('cascade');

			$table->integer('docente_id')->unsigned();
			$table->foreign('docente_id')->references('id')->on('docentes')->onDelete('cascade');
			
			$table->integer('grupo_id')->unsigned();
			$table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade');

			$table->integer('dia_id')->unsigned();
			$table->foreign('dia_id')->references('id')->on('dias')->onDelete('cascade');

			$table->integer('aula_id')->unsigned();
			$table->foreign('aula_id')->references('id')->on('aulas')->onDelete('cascade');
			
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
		Schema::drop('horarios');
	}

}
