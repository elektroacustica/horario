@extends('layout')

@section('content')

<div class="container">
	<h2>Actualizar Informacion del Docente </h2>
	<div class="row">
		<div class="col-md-6">
			{{ Form::open(['route' => ['docente', $docente->id], 'method' => 'PUT']) }}
				<div class="form-group">
					<label for="nombres">Nombres</label>
					<input type="text" class="form-control" placeholder="Nombre completo" name="nombres" id="nombres" value="{{$docente->nombres}} " required/>
				</div>
				<div class="form-group">
					<button class="btn btn-info" type="submit">Actualizar</button>
				</div>
			{{Form::close()}}
		</div>
	</div>
</div>

@stop