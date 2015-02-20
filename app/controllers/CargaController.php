<?php

class CargaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /carga
	 *
	 * @return Response
	 */
	public function index($id)
	{
		$carga = DB::select('SELECT dias.dia, horas.hora, docentes.nombres, grupos.grupo, materias.nombre, aulas.aula
			FROM horarios, horas, docentes, grupos, dias, materias, aulas
			WHERE docente_id = ?
			AND horas.id = hora_id
			AND docentes.id = docente_id
			AND grupos.id = grupo_id
			AND dias.id = dia_id
			AND materias.id = materia_id
			AND aulas.id = aula_id
			ORDER BY dia_id, hora_id', [$id]);

		return View::make('cargas.index', compact('carga', 'id'));
	}

	public function indexPDF($id)
	{
		$carga = DB::select('SELECT dias.dia, horas.alias, docentes.nombres, grupos.grupo, materias.nombre, aulas.aula
			FROM horarios, horas, docentes, grupos, dias, materias, aulas
			WHERE docente_id = ?
			AND horas.id = hora_id
			AND docentes.id = docente_id
			AND grupos.id = grupo_id
			AND dias.id = dia_id
			AND materias.id = materia_id
			AND aulas.id = aula_id
			ORDER BY dia_id, hora_id', [$id]);
		$docente = Docente::find($id);
		foreach($docente as $d){
			$nombre = $docente->nombres;
		}

		return PDF::load(View::make('cargas.pdf', compact('carga', 'nombre')), 'A4', 'portrait')->show();
	}

	public function docenteMaterias($id)
	{	
		$materia = Materia::all();
		$docente = docente::find($id);
		$carga = DB::select('SELECT nombre FROM materias, cargas
			WHERE materias.id = materia_id
			AND docente_id = ?', [$id]);

		return View::make('materia-docente.index', compact('materia', 'docente', 'carga'));
	}

	public function docenteMateriasStore($id)
	{	
		$carga = new carga();
		$carga->docente_id = $id;
		$carga->materia_id = Input::get('materia_id');
		$carga->save();

		return Redirect::back();

	}

	/**
	 * Display the specified resource.
	 * GET /carga/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /carga/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /carga/{id}
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
	 * DELETE /carga/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}