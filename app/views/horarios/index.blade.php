@extends('layout')

@section('content')

<div class="container">

	<div class="row text-center">
		<h3>Seleccione el grupo</h3>
		@foreach($grupo as $g)
		<div class="col-md-4">
			<a href="{{URL::action('HorarioController@show', $g->id)}}">
				<h3>{{$g->grupo}}</h3>
				<p class="text-muted">{{$g->especialidad}}</p>
				<span class="glyphicon glyphicon-calendar max"></span>
			</a>
		</div>
		@endforeach
	</div>


	</div>

@stop