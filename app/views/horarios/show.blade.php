@extends('layout')

@section('content')

<div class="container">
	<h2>Horario Detalle {{$grupo->grupo}}</h2>
	<div class="form-group">
		<a href="{{URL::action('HorarioController@showPDF', $id)}} ">
			<button class="btn btn-primary">PDF</button>
		</a>
	</div>
	<div class="row">
		<div class="col-md-12 relative">
			<table class="table table-hover table-striped table-bordered horario">
				<thead>
					<tr class="warning">
						<th class="text-center">Hora</th>
					</tr>
				</thead>
				<tbody>
					@foreach($hora as $h)
					<tr>
						<td height="40">{{$h->alias}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<table class="table table-hover table-striped table-bordered" id="horario">
				<thead>
					<tr class="warning">
						<!-- <th class="text-center" height="40">Hora</th> -->
						@foreach($dia as $d)
						<th class="text-center">{{$d->dia}}</th>
						@endforeach
					</tr>
				</thead>
				<tbody>
					<tr>
					@foreach($hr1 as $h)
						<td class="text-center" height="40">{{$h->alias}}</td>
					@endforeach
					</tr>
					<tr>
					@foreach($hr2 as $h)
						<td class="text-center" height="40">{{$h->alias}}</td>
					@endforeach
					</tr>
					<tr>
					@foreach($hr3 as $h)
						<td class="text-center" height="40">{{$h->alias}}</td>
					@endforeach
					</tr>
					<tr>
					@foreach($hr4 as $h)
						<td class="text-center" height="40">{{$h->alias}}</td>
					@endforeach
					</tr>
					<tr>
					@foreach($hr5 as $h)
						<td class="text-center" height="40">{{$h->alias}}</td>
					@endforeach
					</tr>
					<tr>
					@foreach($hr6 as $h)
						<td class="text-center" height="40">{{$h->alias}}</td>
					@endforeach
					</tr>
					<tr>
					@foreach($hr7 as $h)
						<td class="text-center" height="40">{{$h->alias}}</td>
					@endforeach
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

@stop