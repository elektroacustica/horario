<?php

class DocenteController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /docente
	 *
	 * @return Response
	 */
	public function index()
	{
		$docente = Docente::orderBy('nombres')->get();

		return View::make('docentes.index', compact('docente'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /docente/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('docentes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /docente
	 *
	 * @return Response
	 */
	public function store()
	{
		$docente = new Docente();

		$docente->nombres = Input::get('nombres');
		$docente->save();

		return Redirect::to('docentes');
	}

	/**
	 * Display the specified resource.
	 * GET /docente/{id}
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
	 * GET /docente/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$docente = Docente::find($id);

		return View::make('docentes.edit', compact('docente'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /docente/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$docente = Docente::find($id);

		$docente->nombres = Input::get('nombres');
		$docente->save();

		return Redirect::to('docentes');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /docente/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$docente = Docente::find($id);

		$docente->destroy($id);

		return Redirect::to('docentes');
	}

}