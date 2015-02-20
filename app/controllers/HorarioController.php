<?php

class HorarioController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /horario
	 *
	 * @return Response
	 */
	public function index($turno_id)
	{
		$grupo = Grupo::select('id', 'grupo', 'turno_id', 'especialidad')->where('turno_id','=', $turno_id)->get();

		return View::make('horarios.index', compact('grupo'));
	}

	// public function createG1()
	// {
	// 	$hora = DB::select('SELECT * FROM horas WHERE id <= 7');
	// 	$grupo = DB::select('SELECT * FROM grupos WHERE id <= 6');
	// 	$docente = Docente::orderBy('nombres')->get();
	// 	$g1 = DB::select(

	// 		'SELECT  cargas.id, hora_id, horas.hora AS hora, docentes.nombres AS docente, grupos.nombre, grupos.id as gid, dia FROM cargas, horas, docentes, grupos
	// 		WHERE horas.id = hora_id 
	// 		AND docentes.id = docente_id
	// 		AND grupos.id = grupo_id
	// 		AND grupo_id = 1
	// 		ORDER BY hora'
	// 	);

	// 	return View::make('horarios.create', compact('docente', 'hora', 'g1', 'grupo'));
	// }

	// public function store()
	// {
	// 	$carga = new Carga();
	// 	$carga->hora_id = Input::get('hora_id');
	// 	$carga->docente_id = Input::get('docente_id');
	// 	$carga->grupo_id = Input::get('grupo_id');
	// 	$carga->dia = Input::get('dia');

	// 	$x = DB::select('SELECT id FROM cargas WHERE hora_id = ? AND dia = ? AND grupo_id = ?', array($carga->hora_id, $carga->dia, $carga->grupo_id));

	// 	if (!$x) {
			
	// 		$carga->save();
	// 		return Redirect::to('/horario-grupo-1');
	// 	}
	// 	else{
	// 		return Redirect::to('/horario-grupo-1');
	// 	}

	// }

	/**
	 * Display the specified resource.
	 * GET /horario/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		if ($id <= 6 ) {
			$hr1 = DB::select('SELECT horarios.id, hora, docentes.nombres, materias.alias, dias.dia FROM horarios, horas, docentes, dias, grupos, materias
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND dias.id = dia_id
				AND materias.id = materia_id
				AND grupos.id = grupo_id
				AND grupo_id = ?
				AND hora_id = 1
				ORDER BY hora_id, dia_id', [$id]);

			$hr2 = DB::select('SELECT horarios.id, hora, docentes.nombres, materias.alias, dias.dia FROM horarios, horas, docentes, dias, grupos, materias
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND dias.id = dia_id
				AND materias.id = materia_id
				AND grupos.id = grupo_id
				AND grupo_id = ?
				AND hora_id = 2
				ORDER BY hora_id, dia_id', [$id]);

			$hr3 = DB::select('SELECT horarios.id, hora, docentes.nombres, materias.alias, dias.dia FROM horarios, horas, docentes, dias, grupos, materias
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND dias.id = dia_id
				AND materias.id = materia_id
				AND grupos.id = grupo_id
				AND grupo_id = ?
				AND hora_id = 3
				ORDER BY hora_id, dia_id', [$id]);

			$hr4 = DB::select('SELECT horarios.id, hora, docentes.nombres, materias.alias, dias.dia FROM horarios, horas, docentes, dias, grupos, materias
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND dias.id = dia_id
				AND materias.id = materia_id
				AND grupos.id = grupo_id
				AND grupo_id = ?
				AND hora_id = 4
				ORDER BY hora_id, dia_id', [$id]);

			$hr5 = DB::select('SELECT horarios.id, hora, docentes.nombres, materias.alias, dias.dia FROM horarios, horas, docentes, dias, grupos, materias
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND dias.id = dia_id
				AND materias.id = materia_id
				AND grupos.id = grupo_id
				AND grupo_id = ?
				AND hora_id = 5
				ORDER BY hora_id, dia_id', [$id]);

			$hr6 = DB::select('SELECT horarios.id, hora, docentes.nombres, materias.alias, dias.dia FROM horarios, horas, docentes, dias, grupos, materias
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND dias.id = dia_id
				AND materias.id = materia_id
				AND grupos.id = grupo_id
				AND grupo_id = ?
				AND hora_id = 6
				ORDER BY hora_id, dia_id', [$id]);

			$hr7 = DB::select('SELECT horarios.id, hora, docentes.nombres, materias.alias, dias.dia FROM horarios, horas, docentes, dias, grupos, materias
		
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND materias.id = materia_id
				AND dias.id = dia_id
				AND grupos.id = grupo_id
				AND grupo_id = ?
				AND hora_id = 7
				ORDER BY hora_id, dia_id', [$id]);

			$hora = Hora::where('id', '<=', 7)->get();
		}
		else{
			$hr1 = DB::select('SELECT horarios.id, hora, docentes.nombres, dias.dia, materias.alias FROM horarios, horas, docentes, dias, grupos, materias
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND dias.id = dia_id
				AND materias.id = materia_id
				AND grupos.id = grupo_id
				AND grupo_id = ?
				AND hora_id = 8
				ORDER BY hora_id, dia_id', [$id]);

			$hr2 = DB::select('SELECT horarios.id, hora, docentes.nombres, dias.dia, materias.alias FROM horarios, horas, docentes, dias, grupos, materias
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND dias.id = dia_id
				AND materias.id = materia_id
				AND grupos.id = grupo_id
				AND grupo_id = ?
				AND hora_id = 9
				ORDER BY hora_id, dia_id', [$id]);

			$hr3 = DB::select('SELECT horarios.id, hora, docentes.nombres, dias.dia, materias.alias FROM horarios, horas, docentes, dias, grupos, materias
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND dias.id = dia_id
				AND materias.id = materia_id
				AND grupos.id = grupo_id
				AND grupo_id = ?
				AND hora_id = 10
				ORDER BY hora_id, dia_id', [$id]);

			$hr4 = DB::select('SELECT horarios.id, hora, docentes.nombres, dias.dia, materias.alias FROM horarios, horas, docentes, dias, grupos, materias
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND dias.id = dia_id
				AND materias.id = materia_id
				AND grupos.id = grupo_id
				AND grupo_id = ?
				AND hora_id = 11
				ORDER BY hora_id, dia_id', [$id]);

			$hr5 = DB::select('SELECT horarios.id, hora, docentes.nombres, dias.dia, materias.alias FROM horarios, horas, docentes, dias, grupos, materias
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND dias.id = dia_id
				AND materias.id = materia_id
				AND grupos.id = grupo_id
				AND grupo_id = ?
				AND hora_id = 12
				ORDER BY hora_id, dia_id', [$id]);

			$hr6 = DB::select('SELECT horarios.id, hora, docentes.nombres, dias.dia, materias.alias FROM horarios, horas, docentes, dias, grupos, materias
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND dias.id = dia_id
				AND materias.id = materia_id
				AND grupos.id = grupo_id
				AND grupo_id = ?
				AND hora_id = 13
				ORDER BY hora_id, dia_id', [$id]);

			$hr7 = DB::select('SELECT horarios.id, hora, docentes.nombres, dias.dia, materias.alias FROM horarios, horas, docentes, dias, grupos	, materias
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND dias.id = dia_id
				AND materias.id = materia_id
				AND grupos.id = grupo_id
				AND grupo_id = ?
				AND hora_id = 14
				ORDER BY hora_id, dia_id', [$id]);

			$hora = Hora::where('id', '>=', 8)->get();
		}

		$grupo = Grupo::find($id);

		$dia = Dia::all();

		return View::make('horarios.show', compact('dia', 'hora', 'hr1', 'hr2', 'hr3', 'hr4', 'hr5', 'hr6', 'hr7', 'id', 'grupo'));
	}

	public function showPDF($id)
	{
		if ($id <= 6 ) {
			$hr1 = DB::select('SELECT horarios.id, hora, docentes.nombres, materias.alias, dias.dia, aulas.aula FROM horarios, horas, docentes, dias, grupos, materias, aulas
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND dias.id = dia_id
				AND materias.id = materia_id
				AND grupos.id = grupo_id
				AND aulas.id = aula_id
				AND grupo_id = ?
				AND hora_id = 1
				ORDER BY hora_id, dia_id', [$id]);

			$hr2 = DB::select('SELECT horarios.id, hora, docentes.nombres, materias.alias, dias.dia, aulas.aula FROM horarios, horas, docentes, dias, grupos, materias, aulas
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND dias.id = dia_id
				AND materias.id = materia_id
				AND grupos.id = grupo_id
				AND aulas.id = aula_id
				AND grupo_id = ?
				AND hora_id = 2
				ORDER BY hora_id, dia_id', [$id]);

			$hr3 = DB::select('SELECT horarios.id, hora, docentes.nombres, materias.alias, dias.dia, aulas.aula FROM horarios, horas, docentes, dias, grupos, materias, aulas
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND dias.id = dia_id
				AND materias.id = materia_id
				AND grupos.id = grupo_id
				AND aulas.id = aula_id
				AND grupo_id = ?
				AND hora_id = 3
				ORDER BY hora_id, dia_id', [$id]);

			$hr4 = DB::select('SELECT horarios.id, hora, docentes.nombres, materias.alias, dias.dia, aulas.aula FROM horarios, horas, docentes, dias, grupos, materias, aulas
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND dias.id = dia_id
				AND materias.id = materia_id
				AND grupos.id = grupo_id
				AND aulas.id = aula_id
				AND grupo_id = ?
				AND hora_id = 4
				ORDER BY hora_id, dia_id', [$id]);

			$hr5 = DB::select('SELECT horarios.id, hora, docentes.nombres, materias.alias, dias.dia, aulas.aula FROM horarios, horas, docentes, dias, grupos, materias, aulas
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND dias.id = dia_id
				AND materias.id = materia_id
				AND grupos.id = grupo_id
				AND aulas.id = aula_id
				AND grupo_id = ?
				AND hora_id = 5
				ORDER BY hora_id, dia_id', [$id]);

			$hr6 = DB::select('SELECT horarios.id, hora, docentes.nombres, materias.alias, dias.dia, aulas.aula FROM horarios, horas, docentes, dias, grupos, materias, aulas
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND dias.id = dia_id
				AND materias.id = materia_id
				AND grupos.id = grupo_id
				AND aulas.id = aula_id
				AND grupo_id = ?
				AND hora_id = 6
				ORDER BY hora_id, dia_id', [$id]);

			$hr7 = DB::select('SELECT horarios.id, hora, docentes.nombres, materias.alias, dias.dia, aulas.aula FROM horarios, horas, docentes, dias, grupos, materias, aulas
		
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND materias.id = materia_id
				AND dias.id = dia_id
				AND aulas.id = aula_id
				AND grupos.id = grupo_id
				AND grupo_id = ?
				AND hora_id = 7
				ORDER BY hora_id, dia_id', [$id]);

			$hora = Hora::where('id', '<=', 7)->get();
		}
		else{
			$hr1 = DB::select('SELECT horarios.id, hora, docentes.nombres, dias.dia, materias.alias, aulas.aula FROM horarios, horas, docentes, dias, grupos, materias, aulas
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND dias.id = dia_id
				AND materias.id = materia_id
				AND grupos.id = grupo_id
				AND aulas.id = aula_id
				AND grupo_id = ?
				AND hora_id = 8
				ORDER BY hora_id, dia_id', [$id]);

			$hr2 = DB::select('SELECT horarios.id, hora, docentes.nombres, dias.dia, materias.alias, aulas.aula FROM horarios, horas, docentes, dias, grupos, materias, aulas
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND dias.id = dia_id
				AND materias.id = materia_id
				AND grupos.id = grupo_id
				AND aulas.id = aula_id
				AND grupo_id = ?
				AND hora_id = 9
				ORDER BY hora_id, dia_id', [$id]);

			$hr3 = DB::select('SELECT horarios.id, hora, docentes.nombres, dias.dia, materias.alias, aulas.aula FROM horarios, horas, docentes, dias, grupos, materias, aulas
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND dias.id = dia_id
				AND materias.id = materia_id
				AND grupos.id = grupo_id
				AND aulas.id = aula_id
				AND grupo_id = ?
				AND hora_id = 10
				ORDER BY hora_id, dia_id', [$id]);

			$hr4 = DB::select('SELECT horarios.id, hora, docentes.nombres, dias.dia, materias.alias, aulas.aula FROM horarios, horas, docentes, dias, grupos, materias, aulas
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND dias.id = dia_id
				AND materias.id = materia_id
				AND grupos.id = grupo_id
				AND aulas.id = aula_id
				AND grupo_id = ?
				AND hora_id = 11
				ORDER BY hora_id, dia_id', [$id]);

			$hr5 = DB::select('SELECT horarios.id, hora, docentes.nombres, dias.dia, materias.alias, aulas.aula FROM horarios, horas, docentes, dias, grupos, materias, aulas
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND dias.id = dia_id
				AND materias.id = materia_id
				AND grupos.id = grupo_id
				AND aulas.id = aula_id
				AND grupo_id = ?
				AND hora_id = 12
				ORDER BY hora_id, dia_id', [$id]);

			$hr6 = DB::select('SELECT horarios.id, hora, docentes.nombres, dias.dia, materias.alias, aulas.aula FROM horarios, horas, docentes, dias, grupos, materias, aulas
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND dias.id = dia_id
				AND materias.id = materia_id
				AND grupos.id = grupo_id
				AND aulas.id = aula_id
				AND grupo_id = ?
				AND hora_id = 13
				ORDER BY hora_id, dia_id', [$id]);

			$hr7 = DB::select('SELECT horarios.id, hora, docentes.nombres, dias.dia, materias.alias, aulas.aula FROM horarios, horas, docentes, dias, grupos	, materias, aulas
				WHERE horas.id = hora_id
				AND docentes.id = docente_id
				AND dias.id = dia_id
				AND materias.id = materia_id
				AND grupos.id = grupo_id
				AND aulas.id = aula_id
				AND grupo_id = ?
				AND hora_id = 14
				ORDER BY hora_id, dia_id', [$id]);

			$hora = Hora::where('id', '>=', 8)->get();
		}
		$grupo = Grupo::find($id);;

		$dia = Dia::all();

		$html = View::make('horarios.pdf', compact('dia', 'hora', 'hr1', 'hr2', 'hr3', 'hr4', 'hr5', 'hr6', 'hr7', 'grupo'));

		return PDF::load($html, 'ma4', 'portrait')->show();
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /horario/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /horario/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroyG1($id)
	{
		$carga = Carga::find($id);
		$carga->destroy($id);

		return Redirect::to('/horario-grupo-1');
	}

}