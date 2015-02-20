@extends('layout')

@section('content')

<div class="container">
    <h2 class="text-center">Información de Materias</h2>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr class="success">
                        <th class="text-center">ID</th>
                        <th class="text-center">Nombre de la Materia</th>
                        <th class="text-center">Horas</th>
                        <th class="text-center">Actualizar</th>
                        <th class="text-center">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($materia as $m)
                       <tr>
                            <td> {{ $m->id }} </td>
                            <td> {{ $m->nombre}} </td>
                            <td class="text-center"> {{ $m->horas}} </td>
                            <td>
                                <a href="materia/{{$m->id}}/edit">
                                    <button class="btn btn-info"><span class="glyphicon glyphicon-pencil min"></span> Actualizar</button>
                                </a>
                            </td>
                            <td>
                                {{ Form::open(['route' => ['materia', $m->id], 'method' => 'DELETE']) }}
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