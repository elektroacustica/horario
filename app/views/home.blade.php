@extends('layout')


@section('content')

<div class="jumbotron">
    <div class="container">
        <h1>Sistema de Horarios</h1>
        <p><span class="glyphicon glyphicon-qrcode"></span> Programa para uso exclusivo del CBTIS 251</p>
        <h5 class="text-muted">Seleccione el periodo</h5>
        <div class="form-group">
        	{{Form::open(['route' => ['gruposajax', $valor = 1], 'method' => 'PUT'])}}
        	<div class="form-group">
        		<button class="btn btn-default" >Agt - En</button>
        	</div>
        	{{Form::close()}}


        	{{Form::open(['route' => ['gruposajax', $valor = 2], 'method' => 'PUT'])}}
        	<div class="form-group">
        		<button class="btn btn-default" >Feb - Jul</button>
        	</div>
        	{{Form::close()}}
        </div>
    </div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<figure>
				<img src=" {{asset('img/DGETI.jpg')}} " alt="" class="image">
			</figure>
		</div>
		<div class="col-md-6">
			<li class="dropdown">
			    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			    	<span class="glyphicon glyphicon-plus-sign min"></span>
			    	Agregar Carga<b class="caret"></b></a>
			    <ul class="dropdown-menu">
			    	<li class="dropdown-header">Grupos Matutinos</li>
			    	@foreach($matutino as $m)
			    	<li><a href="{{URL::action('GrupoController@indexMatutino', $m->id)}}">{{$m->grupo}} {{$m->especialidad}}</a></li>
			    	@endforeach
			        <li class="divider"></li>
			        <li class="dropdown-header">Grupos Verpertinos</li>
			        @foreach($vespertino as $v)
			    	<li><a href="{{URL::action('GrupoController@indexVespertino', $m->id)}}">{{$v->grupo}} {{$v->especialidad}}</a></li>
			    	@endforeach
			    </ul>
			</li>
		</div>
	</div>
	
</div>

@stop