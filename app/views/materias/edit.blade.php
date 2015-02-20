@extends('layout')

@section('content')

<div class="container">
	<h2>Actualizar Informacion de la Materia</h2>
	<div class="row">
		<div class="col-md-6">
			{{ Form::open(['route' => ['materia', $materia->id], 'method' => 'PUT']) }}
				<div class="form-group">
					<label for="nombre">Nombre de la Materia</label>
					<input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" value="{{$materia->nombre}} " required/>
				</div>
				<div class="form-group">
					<label for="horas">Total de Horas</label>
					<input type="text" class="form-control" placeholder="total de horas" name="horas" id="horas" value="{{$materia->horas}} " required/>
				</div>
				<div class="form-group">
					<label for="alias">Nombre Corto de la materia</label>
					<input type="text" class="form-control" placeholder="Nombre corto" name="alias" id="horas" value="{{$materia->alias}} " required/>
				</div>
				<div class="form-group">
					<label for="ciclo">Seleccione ciclo</label>
					<input type="text" class="form-control" placeholder="Ciclo Escolar" name="ciclo" id="horas" value="{{$materia->ciclo}} " required/>
				</div>
				<div class="form-group">
					<button class="btn btn-info" type="submit">Actualizar</button>
				</div>
			{{Form::close()}}
		</div>
	</div>
</div>

@stop