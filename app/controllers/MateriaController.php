<?php

class MateriaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /maateria
	 *
	 * @return Response
	 */
	public function index()
	{
		$materia = Materia::orderBy('nombre')->get();

		return View::make('materias.index', compact('materia'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /maateria/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('materias.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /maateria
	 *
	 * @return Response
	 */
	public function store()
	{
		$materia = new Materia();
		$materia->nombre = Input::get('nombre');
		$materia->horas = Input::get('horas');
		$materia->horas = Input::get('ciclo');
		$materia->save();
		
		return Redirect::to('materias');
	}

	/**
	 * Display the specified resource.
	 * GET /maateria/{id}
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
	 * GET /maateria/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$materia = Materia::find($id);

		return View::make('materias.edit', compact('materia'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /maateria/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$materia = Materia::find($id);
		$materia->nombre = Input::get('nombre');
		$materia->horas = Input::get('horas');
		$materia->ciclo = Input::get('ciclo');
		$materia->save();

		return Redirect::to('materias');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /maateria/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$materia = Materia::find($id);

		$materia->destroy($id);

		return Redirect::to('materias');
	}

}