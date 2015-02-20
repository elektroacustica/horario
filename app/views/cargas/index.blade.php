@extends('layout')

@section('content')

<div class="container">
	<h2>Horario Para Docente</h2>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr class="info">
						<th class="text-center">Dia</th>
						<th class="text-center">Hora</th>
						<th class="text-center">Grupo</th>
						<th class="text-center">Materia</th>
						<th class="text-center">Salon</th>
					</tr>
				</thead>
				<tbody>
					@foreach($carga as $c)
					<tr>
						<td>{{$c->dia}}</td>
						<td>{{$c->hora}}</td>
						<td>{{$c->grupo}}</td>
						<td>{{$c->nombre}}</td>
						<td>{{$c->aula}}</td>
					</tr>
					@endforeach 
				</tbody>
			</table>
			<div class="form-group">
				<button class="btn btn-primary">
					<a href="{{URL::action('CargaController@indexPDF', $id)}}">PDF</a></button>
			</div>
		</div>
	</div>
</div>

@stop