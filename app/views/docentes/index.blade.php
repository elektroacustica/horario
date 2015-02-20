@extends('layout')

@section('content')

<div class="container">
	<div class="row">
		<h2 class="text-center">Información de Docentes</h2>
		<div class="col-md-12">
			<table class="table table-hover table-striped table-bordered">
			    <thead>
			        <tr class="success">
			            <th class="text-center">ID</th>
			            <th class="text-center">Nombres</th>
			           <!--  <th class="text-center">Materias</th> -->
			            <th class="text-center">Carga</th>
			            <th class="text-center">Actualizar</th>
			            <th class="text-center">Eliminar</th>
			        </tr>
			    </thead>
			    <tbody>
			    @foreach ($docente as $d)
			           <tr class="text-center">
			                <td> {{ $d->id }} </td>
			                <td> {{ $d->nombres}} </td>
			                <!-- <td>
			                    <a href="docente/{{$d->id}}/materias">
			                        <button class="btn btn-default"><span class="glyphicon glyphicon glyphicon-cog min"></span> Horario</button>
			                    </a>
			                </td> -->
			                <td>
			                    <a href="docente/{{$d->id}}/carga">
			                        <button class="btn btn-primary"><span class="glyphicon glyphicon-calendar min"></span> Horario</button>
			                    </a>
			                </td>
			                <td>
			                    <a href="docente/{{$d->id}}/edit">
			                        <button class="btn btn-info"><span class="glyphicon glyphicon-pencil min"></span> Actualizar</button>
			                    </a>
			                </td>
			                <td>
			                    {{ Form::open(['route' => ['docente', $d->id], 'method' => 'DELETE']) }}
			                        <div class="form-group">
			                            <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash min"></span> Eliminar</button>
			                        </div>
			                    {{Form::close()}}
			                </td>
			           </tr>
			    @endforeach
			    </tbody>
			</table>
		</div>
	</div>
	
</div>

@stop