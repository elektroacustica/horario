@extends('layout')

{{ HTML::script('js/angular.js') }}
{{ HTML::script('js/app.js') }}
{{ HTML::script('js/ciclo.js') }}

@section('content')


<div class="container" ng-app="horario" ng-controller="horario">
	<h2>Horario</h2>

	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			@if(Session::has('mensajeX'))
            <div id="flash_notice" class="success text-center">
            	<div class="alert alert-dismissable alert-success">
            		<button type="button" class="close" data-dismiss="alert">×</button>
            		<span class="glyphicon glyphicon-floppy-saved"></span>
            		<strong>{{ Session::get('mensajeX') }}</strong>
            	</div>
            </div>
            @elseif(Session::has('mensajeY'))
            <div id="flash_notice" class="danger text-center">
            	<div class="alert alert-dismissable alert-danger">
            		<button type="button" class="close" data-dismiss="alert">×</button>
            		<span class="glyphicon glyphicon-floppy-remove"></span>
            		<strong>{{Session::get('mensajeY') }}</strong>
            	</div>
            </div>
            @elseif(Session::has('mensajeZ'))
            <div id="flash_notice" class="danger text-center">
            	<div class="alert alert-dismissable alert-info">
            		<button type="button" class="close" data-dismiss="alert">×</button>
            		<span class="glyphicon glyphicon-floppy-disk"></span>
            		<strong>{{Session::get('mensajeZ') }}</strong>
            	</div>
            </div>
            @endif
		</div>
		<div class="col-md-3"></div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<h4>Lunes</h4>
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr class="info">
						<th>Hora</th>
						<th>Materia</th>
						<th>Docente</th>
						<th>Eliminar</th>
					</tr>
					<tbody>
						@foreach($lunes as $d)
						<tr>
							<td>{{$d->hora}}</td>
							<td>{{$d->nombre}}</td>
							<td>{{$d->nombres}}</td>
							<td>
								{{Form::open(['route' => ['horario.destroy', $d->id], 'method' => 'DELETE']) }}
								<button class="btn-danger btn-xs">
									<span class="glyphicon glyphicon-remove min"></span>{{$d->id}}
								</button> 
								{{Form::close()}}
							</td>
						</tr>
						@endforeach
					</tbody>
				</thead>
			</table>
		</div>
		<div class="col-md-6">
			<h4>Martes</h4>
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr class="info">
						<th>Hora</th>
						<th>Materia</th>
						<th>Docente</th>
						<th>Eliminar</th>
					</tr>
					<tbody>
						@foreach($martes as $d)
						<tr>
							<td>{{$d->hora}}</td>
							<td>{{$d->nombre}}</td>
							<td>{{$d->nombres}}
							</td>
							<td>
								{{Form::open(['route' => ['horario.destroy', $d->id], 'method' => 'DELETE']) }}
								<button class="btn-danger btn-xs">
									<span class="glyphicon glyphicon-remove min"></span>{{$d->id}}
								</button> 
								{{Form::close()}}
							</td>
						</tr>
						@endforeach
					</tbody>
				</thead>
			</table>
		</div>
	</div>	

	<div class="row">
		<div class="col-md-12">
			{{ Form::open(['url' => '/crear-horario/grupo']) }}
				<table class="table table-hover table-stiped table-bordered">
					<thead>
						<tr class="success">
							<td class="text-center">Hora</td>
							<td class="text-center">Materia</td>
							<td class="text-center">docente</td>
							<td class="text-center">grupo</td>
							<td class="text-center">dia</td>
							<td class="text-center">Aula</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<select name="hora_id" id="" class="form-control" ng-model="hora_id" ng-change="boton()">
									@foreach($hora as $h)
									<option value="{{$h->id}}">{{$h->hora}}</option>
									@endforeach
								</select>
							</td>
							<td>
								<select name="materia_id" id="" class="form-control">
									@foreach($materia as $m)
									<option value="{{$m->id}}">{{$m->nombre}}</option>
									@endforeach
								</select>
							</td>
							<td>
								<select name="docente_id" id="" class="form-control" ng-model="docente_id" ng-change="boton()">
									@foreach($docente as $d)
									<option value="{{$d->id}}">{{$d->nombres}}</option>
									@endforeach
								</select>
							</td>
							<td>
								<select name="grupo_id" id="" class="form-control">
									@foreach($grupo as $g)
									<option value="{{$g->id}}">{{$g->grupo}}</option>
									@endforeach
								</select>
							</td>
							<td>
								<select name="dia_id" id="" class="form-control" ng-model="dia_id" ng-change="boton()"s>
									@foreach($dia as $d)
									<option value="{{$d->id}}">{{$d->dia}}</option>
									@endforeach
								</select>
							</td>
							<td>
								<select name="aula_id" id="" class="form-control">
									@foreach($aula as $d)
									<option value="{{$d->id}}">{{$d->aula}}</option>
									@endforeach
								</select>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="form-group">
					<button ng-bind="valorBoton" class="btn btn-success" type="@{{tipo}}" ></button>
				</div>
			{{Form::close()}}
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<h4>Miercoles</h4>
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr class="info">
						<th>Hora</th>
						<th>Materia</th>
						<th>Docente</th>
						<th>Eliminar</th>
					</tr>
					<tbody>
						@foreach($miercoles as $d)
						<tr>
							<td>{{$d->hora}}</td>
							<td>{{$d->nombre}}</td>
							<td>{{$d->nombres}}
							</td>
							<td>
								{{Form::open(['route' => ['horario.destroy', $d->id], 'method' => 'DELETE']) }}
								<button class="btn-danger btn-xs">
									<span class="glyphicon glyphicon-remove min"></span>{{$d->id}}
								</button> 
								{{Form::close()}}
							</td>
						</tr>
						@endforeach
					</tbody>
				</thead>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h4>Jueves</h4>
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr class="info">
						<th>Hora</th>
						<th>Materia</th>
						<th>Docente</th>
						<th>Eliminar</th>
					</tr>
					<tbody>
						@foreach($jueves as $d)
						<tr>
							<td>{{$d->hora}}</td>
							<td>{{$d->nombre}}</td>
							<td>{{$d->nombres}}
							</td>
							<td>
								{{Form::open(['route' => ['horario.destroy', $d->id], 'method' => 'DELETE']) }}
								<button class="btn-danger btn-xs">
									<span class="glyphicon glyphicon-remove min"></span>{{$d->id}}
								</button> 
								{{Form::close()}}
							</td>
						</tr>
						@endforeach
					</tbody>
				</thead>
			</table>
		</div>
		<div class="col-md-6">
			<h4>Viernes</h4>
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr class="info">
						<th>Hora</th>
						<th>Materia</th>
						<th>Docente</th>
						<th>Eliminar</th>
					</tr>
					<tbody>
						@foreach($viernes as $d)
						<tr>
							<td>{{$d->hora}}</td>
							<td>{{$d->nombre}}</td>
							<td>{{$d->nombres}}
							</td>
							<td>
								{{Form::open(['route' => ['horario.destroy', $d->id], 'method' => 'DELETE']) }}
								<button class="btn-danger btn-xs">
									<span class="glyphicon glyphicon-remove min"></span>{{$d->id}}
								</button> 
								{{Form::close()}}
							</td>
						</tr>
						@endforeach
					</tbody>
				</thead>
			</table>
		</div>
	</div>
</div>

@stop