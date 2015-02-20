@extends('layout')

@section('content')

<div class="container">
	<h2 class="text-center">Nuevo Docente</h2>
	<div class="row">
		<div class="col-md-6">
			{{Form::open(['url' => 'docente'])}}
				<div class="form-group">
					<label for="nombres">Nombre Completo</label>
					<input type="text" class="form-control" placeholder="Nombres" name="nombres" id="nombres" required/>
				</div>
				<div class="form-group">
					<button class="btn btn-info" type="submit">Crear</button>
				</div>
			{{Form::close()}}
		</div>
	</div>
</div>

@stop