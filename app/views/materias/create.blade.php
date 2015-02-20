@extends('layout')

@section('content')

<div class="container">
	<h2 class="text-center">Nueva Materia</h2>
	<div class="row">
		<div class="col-md-6">
			{{Form::open(['url' => 'materia'])}}
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" class="form-control" placeholder="nombre" name="nombre" id="nombre" required/>
				</div>
				<div class="form-group">
					<label for="horas">Horas</label>
					<input type="text" class="form-control" placeholder="horas" name="horas" id="horas" required/>
				</div>
				<div class="form-group">
					<label for="alias">Nombre Corto</label>
					<input type="text" class="form-control" placeholder="alias" name="alias" id="horas" required/>
				</div>
				<div class="form-group">
					<label for="ciclo">Ciclo escolar</label>
					<input type="text" class="form-control" placeholder="puede ser 1 o el ciclo 2" name="ciclo" id="ciclo" required/>
				</div>
				<div class="form-group">
					<button class="btn btn-info" type="submit">Crear</button>
				</div>
			{{Form::close()}}
		</div>
	</div>
</div>

@stop