<?php

class GrupoController extends \BaseController {

	public function indexMatutino($id)
	{
		$hora = DB::select('SELECT * FROM horas WHERE id <= 7');
		$grupo = Grupo::where('id', '=', $id)->get();
		$docente = Docente::select('id', 'nombres')->orderBy('nombres')->get();
		$dia = Dia::all();
		$aula = Aula::all();

		$materia = DB::select('SELECT materias.id, nombre FROM materias, ciclos
			WHERE materias.ciclo = ciclos.ciclo');

		$lunes = DB::select('SELECT horarios.id, hora, nombre, nombres, dia, grupo FROM horas, docentes, horarios, dias, grupos, materias
			WHERE horas.id =  hora_id
			AND docentes.id = docente_id
			AND dias.id = dia_id
			AND grupos.id = grupo_id
			AND grupo_id = ?
			AND materias.id = materia_id
			AND dia_id = 1
			ORDER BY hora', [$id]);

		$martes = DB::select('SELECT horarios.id, hora, nombre, nombres, dia, grupo FROM horas, docentes, horarios, dias, grupos, materias
			WHERE horas.id =  hora_id
			AND docentes.id = docente_id
			AND dias.id = dia_id
			AND grupos.id = grupo_id
			AND grupo_id = ?
			AND materias.id = materia_id
			AND dia_id = 2
			ORDER BY hora', [$id]);

		$miercoles = DB::select('SELECT horarios.id, hora, nombre, nombres, dia, grupo FROM horas, docentes, horarios, dias, grupos, materias
			WHERE horas.id =  hora_id
			AND docentes.id = docente_id
			AND dias.id = dia_id
			AND grupos.id = grupo_id
			AND grupo_id = ?
			AND materias.id = materia_id
			AND dia_id = 3
			ORDER BY hora', [$id]);

		$jueves = DB::select('SELECT horarios.id, hora, nombre, nombres, dia, grupo FROM horas, docentes, horarios, dias, grupos, materias
			WHERE horas.id =  hora_id
			AND docentes.id = docente_id
			AND dias.id = dia_id
			AND grupos.id = grupo_id
			AND grupo_id = ?
			AND materias.id = materia_id
			AND dia_id = 4
			ORDER BY hora', [$id]);

		$viernes = DB::select('SELECT horarios.id, hora, nombre, nombres, dia, grupo FROM horas, docentes, horarios, dias, grupos, materias
			WHERE horas.id =  hora_id
			AND docentes.id = docente_id
			AND dias.id = dia_id
			AND grupos.id = grupo_id
			AND grupo_id = ?
			AND materias.id = materia_id
			AND dia_id = 5
			ORDER BY hora', [$id]);

		$horario = DB::select('SELECT horas.hora, horas.id as hid, docentes.nombres, dias.dia FROM horarios, horas, docentes, dias
			WHERE grupo_id = ?
			AND horas.id = hora_id
			AND docentes.id = docente_id
			AND dias.id = dia_id', [$id]);
			return View::make('grupos.index', compact('hora', 'grupo', 'docente', 'dia', 'aula','materia', 'lunes', 'martes', 'miercoles', 'jueves', 'viernes'));
	}

	public function indexVespertino($id)
	{
		$hora = Hora::where('id','>=', 8 )->get();
		$grupo = Grupo::where('id', '=', $id)->get();
		$docente = Docente::select('id', 'nombres')->orderBy('nombres')->get();
		$dia = Dia::all();
		$aula = Aula::all();

		$materia = DB::select('SELECT materias.id, nombre FROM materias, ciclos
			WHERE materias.ciclo = ciclos.ciclo');

		$lunes = DB::select('SELECT horarios.id, horas.alias as hora, nombre, nombres, dia, grupo FROM horas, docentes, horarios, dias, grupos, materias
			WHERE horas.id =  hora_id
			AND docentes.id = docente_id
			AND dias.id = dia_id
			AND grupos.id = grupo_id
			AND grupo_id = ?
			AND materias.id = materia_id
			AND dia_id = 1
			ORDER BY hora asc', [$id]);

		$martes = DB::select('SELECT horarios.id, horas.alias as hora, nombre, nombres, dia, grupo FROM horas, docentes, horarios, dias, grupos, materias
			WHERE horas.id =  hora_id
			AND docentes.id = docente_id
			AND dias.id = dia_id
			AND grupos.id = grupo_id
			AND grupo_id = ?
			AND materias.id = materia_id
			AND dia_id = 2
			ORDER BY hora asc', [$id]);

		$miercoles = DB::select('SELECT horarios.id, horas.alias as hora, nombre, nombres, dia, grupo FROM horas, docentes, horarios, dias, grupos, materias
			WHERE horas.id =  hora_id
			AND docentes.id = docente_id
			AND dias.id = dia_id
			AND grupos.id = grupo_id
			AND grupo_id = ?
			AND materias.id = materia_id
			AND dia_id = 3
			ORDER BY hora asc', [$id]);

		$jueves = DB::select('SELECT horarios.id, horas.alias as hora, nombre, nombres, dia, grupo FROM horas, docentes, horarios, dias, grupos, materias
			WHERE horas.id =  hora_id
			AND docentes.id = docente_id
			AND dias.id = dia_id
			AND grupos.id = grupo_id
			AND grupo_id = ?
			AND materias.id = materia_id
			AND dia_id = 4
			ORDER BY hora asc', [$id]);

		$viernes = DB::select('SELECT horarios.id, horas.alias as hora, nombre, nombres, dia, grupo FROM horas, docentes, horarios, dias, grupos, materias
			WHERE horas.id =  hora_id
			AND docentes.id = docente_id
			AND dias.id = dia_id
			AND grupos.id = grupo_id
			AND grupo_id = ?
			AND materias.id = materia_id
			AND dia_id = 5
			ORDER BY hora asc', [$id]);

		$horario = DB::select('SELECT horas.hora, horas.id as hid, docentes.nombres, dias.dia FROM horarios, horas, docentes, dias
		WHERE grupo_id = ?
		AND horas.id = hora_id
		AND docentes.id = docente_id
		AND dias.id = dia_id', [$id]);

		return View::make('grupos.indexV', compact('hora', 'grupo', 'docente', 'dia', 'aula','lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'materia'));
	}

	public function store()
	{
		$horario = new Horario();
		$horario->hora_id = Input::get('hora_id');
		$horario->materia_id = Input::get('materia_id');
		$horario->docente_id = Input::get('docente_id');
		$horario->grupo_id = Input::get('grupo_id');
		$horario->dia_id = Input::get('dia_id');
		$horario->aula_id = Input::get('aula_id');

		$y = DB::select('SELECT id FROM horarios WHERE hora_id = ? AND docente_id = ? AND dia_id = ?', array($horario->hora_id, $horario->docente_id, $horario->dia_id));
		$z = DB::select('SELECT id FROM horarios WHERE hora_id = ? AND dia_id = ? AND grupo_id = ?', array($horario->hora_id, $horario->dia_id, $horario->grupo_id));

		$x = DB::select('SELECT * FROM horarios WHERE hora_id = 7 AND dia_id = ? AND docente_id = ?', [$horario->dia_id, $horario->docente_id]);

		$min = DB::select('SELECT count(*) AS n FROM horarios WHERE materia_id = ?', [$horario->materia_id]);
		$max = Materia::where('id', '=', $horario->materia_id)->get();

		foreach($min as $m)
		{
		    $vmin = $m->n;
		}

		foreach($max as $vm)
		{
		    $vmax = $vm->horas;
		}

		// if($vmin >= $vmax){
		// 	return Redirect::back()->with('mensajeY', ' Horas Agotadas');
		// }
		// else{
		// 	return 'ss';
		// }

		if (($horario->hora_id == 8) && ($x)) {
			return Redirect::back()->with('mensajeY', ' Enpalme de horario');
		}
		elseif ($z || $y) {
			return Redirect::back()->with('mensajeY', ' No se puede guardar');
		}
		// elseif($vmin >= $vmax){
		// 	return Redirect::back()->with('mensajeY', ' Horas Agotadas');
		// }
		else{
			$horario->save();
			return Redirect::back()->with('mensajeX', 'Registro Guardado');
		}

	}

	public function update($valor)
	{
		$ciclo = Ciclo::find(1);
		$ciclo->ciclo = $valor;
		$ciclo->save();
		if ($valor == 1) {

			$grupo = Grupo::find(1);
			$grupo->grupo = '101';
			$grupo->save();

			$grupo = Grupo::find(2);
			$grupo->grupo = '103';
			$grupo->save();

			$grupo = Grupo::find(3);
			$grupo->grupo = '301';
			$grupo->save();

			$grupo = Grupo::find(4);
			$grupo->grupo = '303';
			$grupo->save();

			$grupo = Grupo::find(5);
			$grupo->grupo = '501';
			$grupo->save();

			$grupo = Grupo::find(6);
			$grupo->grupo = '503';
			$grupo->save();

			$grupo = Grupo::find(7);
			$grupo->grupo = '102';
			$grupo->save();

			$grupo = Grupo::find(8);
			$grupo->grupo = '104';
			$grupo->save();

			$grupo = Grupo::find(9);
			$grupo->grupo = '302';
			$grupo->save();

			$grupo = Grupo::find(10);
			$grupo->grupo = '304';
			$grupo->save();

			$grupo = Grupo::find(11);
			$grupo->grupo = '502';
			$grupo->save();

			$grupo = Grupo::find(12);
			$grupo->grupo = '504';
			$grupo->save();

			return Redirect::back();
		}
		else{
			$grupo1 = Grupo::find(1);
			$grupo1->grupo = '201';
			$grupo1->save();

			$grupo2 = Grupo::find(2);
			$grupo2->grupo = '203';
			$grupo2->save();

			$grupo3 = Grupo::find(3);
			$grupo3->grupo = '401';
			$grupo3->save();

			$grupo4 = Grupo::find(4);
			$grupo4->grupo = '403';
			$grupo4->save();

			$grupo5 = Grupo::find(5);
			$grupo5->grupo = '601';
			$grupo5->save();

			$grupo6 = Grupo::find(6);
			$grupo6->grupo = '603';
			$grupo6->save();

			$grupo = Grupo::find(7);
			$grupo->grupo = '202';
			$grupo->save();

			$grupo = Grupo::find(8);
			$grupo->grupo = '204';
			$grupo->save();

			$grupo = Grupo::find(9);
			$grupo->grupo = '402';
			$grupo->save();

			$grupo = Grupo::find(10);
			$grupo->grupo = '404';
			$grupo->save();

			$grupo = Grupo::find(11);
			$grupo->grupo = '602';
			$grupo->save();

			$grupo = Grupo::find(12);
			$grupo->grupo = '604';
			$grupo->save();

			return Redirect::back();
		}
	}

	public function destroy($id)
	{
		$horario = Horario::destroy($id);
		return Redirect::back()->with('mensajeZ', 'Registro borrado');
	}

}