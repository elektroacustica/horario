<?php

class CicloController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /ciclo
	 *
	 * @return Response
	 */
	public function index()
	{
		$ciclo = Ciclo::all();

		return $ciclo;
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /ciclo/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /ciclo
	 *
	 * @return Response
	 */
	public function store()
	{
		
	}

	/**
	 * Display the specified resource.
	 * GET /ciclo/{id}
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
	 * GET /ciclo/{id}/edit
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
	 * PUT /ciclo/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		$ciclo = Ciclo::find(1);
		$ciclo->ciclo = Input::get('ciclo');
		$ciclo->save();

	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /ciclo/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}