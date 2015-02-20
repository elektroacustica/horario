@extends('layout')

@section('content')

<div class="container">
	<h2>Materias para {{$docente->nombres}}</h2>
	<div class="row">
		<div class="col-md-4">
			{{Form::open(['route' => ['docente.materia', $docente->id] ])}}
			<div class="form-group">
				<label for="">Materia</label>
				<select name="materia_id" id="" class="form-control">
					@foreach($materia as $m)
					<option value="{{$m->id}}">{{$m->nombre}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<button class="btn btn-success">Enviar</button>
			</div>
			{{Form::close()}}
		</div>
		<div class="col-md-4">
			<p>Materias Asignadas</p>
			@foreach($carga as $d)
			<p>{{$d->nombre}}</p>
			@endforeach
		</div>
		<div class="form-group">
				<button class="btn btn-primary">
					<a href="/docente/{{$id}}/carga/pdf" target="_blank">PDF</a>
				</button>
		</div>
	</div>
</div>

@stop