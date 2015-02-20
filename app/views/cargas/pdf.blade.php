<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PDF</title>
	<style>
		@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:200);
		html{
			font-family: 'Source Sans Pro', sans-serif;
		}
		p .nombre-docente{
			font-size: 100px;
		}
		.container {
		  margin-right: auto;
		  margin-left: auto;
		  padding-left: 15px;
		  padding-right: 15px;
		}
		.table {
		  width: 250px;
		  border: 1px solid #000;
		  border-collapse: collapse;
		  margin: auto;
		}
		.table th, .table td {
		  border: 1px solid #000;
		}
		.text-center{
			text-align: center;
		}
		.table {
		    border-collapse: collapse !important;
		  }
		  .table td,
		  .table th {
		    background-color: #fff !important;
		  }
		  .table-bordered th,
		  .table-bordered td {
		    border: 1px solid #ddd !important;
		  }
		  th {
		    text-align: left;
		  }
		  .table {
		    width: 100%;
		    max-width: 100%;
		    margin-bottom: 21px;
		  }
		  .table > thead > tr > th,
		  .table > tbody > tr > th,
		  .table > tfoot > tr > th,
		  .table > thead > tr > td,
		  .table > tbody > tr > td,
		  .table > tfoot > tr > td {
		    padding: 8px;
		    line-height: 1.42857143;
		    vertical-align: top;
		    border-top: 1px solid #dddddd;
		  }
		  .table > thead > tr > th {
		    vertical-align: bottom;
		    border-bottom: 2px solid #dddddd;
		  }
		  .table > caption + thead > tr:first-child > th,
		  .table > colgroup + thead > tr:first-child > th,
		  .table > thead:first-child > tr:first-child > th,
		  .table > caption + thead > tr:first-child > td,
		  .table > colgroup + thead > tr:first-child > td,
		  .table > thead:first-child > tr:first-child > td {
		    border-top: 0;
		  }
		  .table > tbody + tbody {
		    border-top: 2px solid #dddddd;
		  }
		  .table .table {
		    background-color: #ffffff;
		  }
		  .table-condensed > thead > tr > th,
		  .table-condensed > tbody > tr > th,
		  .table-condensed > tfoot > tr > th,
		  .table-condensed > thead > tr > td,
		  .table-condensed > tbody > tr > td,
		  .table-condensed > tfoot > tr > td {
		    padding: 5px;
		  }
		  .table-bordered {
		    border: 1px solid #dddddd;
		  }
		  .table-bordered > thead > tr > th,
		  .table-bordered > tbody > tr > th,
		  .table-bordered > tfoot > tr > th,
		  .table-bordered > thead > tr > td,
		  .table-bordered > tbody > tr > td,
		  .table-bordered > tfoot > tr > td {
		    border: 1px solid #dddddd;
		  }
		  .table-bordered > thead > tr > th,
		  .table-bordered > thead > tr > td {
		    border-bottom-width: 2px;
		  }
		  .table-striped > tbody > tr:nth-child(odd) {
		    background-color: #f9f9f9;
		  }
		  .table-hover > tbody > tr:hover {
		    background-color: #f5f5f5;
		  }
		  table col[class*="col-"] {
		    position: static;
		    float: none;
		    display: table-column;
		  }
		  table td[class*="col-"],
		  table th[class*="col-"] {
		    position: static;
		    float: none;
		    display: table-cell;
		  }
		  .table > thead > tr > td.active,
		  .table > tbody > tr > td.active,
		  .table > tfoot > tr > td.active,
		  .table > thead > tr > th.active,
		  .table > tbody > tr > th.active,
		  .table > tfoot > tr > th.active,
		  .table > thead > tr.active > td,
		  .table > tbody > tr.active > td,
		  .table > tfoot > tr.active > td,
		  .table > thead > tr.active > th,
		  .table > tbody > tr.active > th,
		  .table > tfoot > tr.active > th {
		    background-color: #f5f5f5;
		  }
		  .table-hover > tbody > tr > td.active:hover,
		  .table-hover > tbody > tr > th.active:hover,
		  .table-hover > tbody > tr.active:hover > td,
		  .table-hover > tbody > tr:hover > .active,
		  .table-hover > tbody > tr.active:hover > th {
		    background-color: #e8e8e8;
		  }
		  .table > thead > tr > td.success,
		  .table > tbody > tr > td.success,
		  .table > tfoot > tr > td.success,
		  .table > thead > tr > th.success,
		  .table > tbody > tr > th.success,
		  .table > tfoot > tr > th.success,
		  .table > thead > tr.success > td,
		  .table > tbody > tr.success > td,
		  .table > tfoot > tr.success > td,
		  .table > thead > tr.success > th,
		  .table > tbody > tr.success > th,
		  .table > tfoot > tr.success > th {
		    background-color: #3fb618;
		  }
		  .table-hover > tbody > tr > td.success:hover,
		  .table-hover > tbody > tr > th.success:hover,
		  .table-hover > tbody > tr.success:hover > td,
		  .table-hover > tbody > tr:hover > .success,
		  .table-hover > tbody > tr.success:hover > th {
		    background-color: #379f15;
		  }
		  .table > thead > tr > td.info,
		  .table > tbody > tr > td.info,
		  .table > tfoot > tr > td.info,
		  .table > thead > tr > th.info,
		  .table > tbody > tr > th.info,
		  .table > tfoot > tr > th.info,
		  .table > thead > tr.info > td,
		  .table > tbody > tr.info > td,
		  .table > tfoot > tr.info > td,
		  .table > thead > tr.info > th,
		  .table > tbody > tr.info > th,
		  .table > tfoot > tr.info > th {
		    background-color: #9954bb;
		  }
		  .table-hover > tbody > tr > td.info:hover,
		  .table-hover > tbody > tr > th.info:hover,
		  .table-hover > tbody > tr.info:hover > td,
		  .table-hover > tbody > tr:hover > .info,
		  .table-hover > tbody > tr.info:hover > th {
		    background-color: #8d46b0;
		  }
		  .table > thead > tr > td.warning,
		  .table > tbody > tr > td.warning,
		  .table > tfoot > tr > td.warning,
		  .table > thead > tr > th.warning,
		  .table > tbody > tr > th.warning,
		  .table > tfoot > tr > th.warning,
		  .table > thead > tr.warning > td,
		  .table > tbody > tr.warning > td,
		  .table > tfoot > tr.warning > td,
		  .table > thead > tr.warning > th,
		  .table > tbody > tr.warning > th,
		  .table > tfoot > tr.warning > th {
		    background-color: #ff7518;
		  }
		  .table-hover > tbody > tr > td.warning:hover,
		  .table-hover > tbody > tr > th.warning:hover,
		  .table-hover > tbody > tr.warning:hover > td,
		  .table-hover > tbody > tr:hover > .warning,
		  .table-hover > tbody > tr.warning:hover > th {
		    background-color: #fe6600;
		  }
		  .table > thead > tr > td.danger,
		  .table > tbody > tr > td.danger,
		  .table > tfoot > tr > td.danger,
		  .table > thead > tr > th.danger,
		  .table > tbody > tr > th.danger,
		  .table > tfoot > tr > th.danger,
		  .table > thead > tr.danger > td,
		  .table > tbody > tr.danger > td,
		  .table > tfoot > tr.danger > td,
		  .table > thead > tr.danger > th,
		  .table > tbody > tr.danger > th,
		  .table > tfoot > tr.danger > th {
		    background-color: #ff0039;
		  }
		  .table-hover > tbody > tr > td.danger:hover,
		  .table-hover > tbody > tr > th.danger:hover,
		  .table-hover > tbody > tr.danger:hover > td,
		  .table-hover > tbody > tr:hover > .danger,
		  .table-hover > tbody > tr.danger:hover > th {
		    background-color: #e60033;
		  }
		  .table-responsive {
		    overflow-x: auto;
		    min-height: 0.01%;
		  }
	</style>
</head>
<body>
<div class="container">
	<p class="text-center nombre-docente">{{$nombre}}</p>
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
					</tr>
				</thead>
				<tbody>
					@foreach($carga as $c)
					<tr>
						<td>{{$c->dia}}</td>
						<td>{{$c->alias}}</td>
						<td>{{$c->grupo}}</td>
						<td>{{$c->nombre}}</td>
						<td>{{$c->aula}}</td>
					</tr>
					@endforeach 
				</tbody>
			</table>
		</div>
	</div>
</div>
	
</body>
</html>