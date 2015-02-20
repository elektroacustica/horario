<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema Horarios</title>
	<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href=" {{asset('bootstrap/css/mystyle.css') }} ">
	<script src="{{ asset('js/modernizr.js')}} "></script>
</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="{{URL::action('HomeController@index')}}">CBTIS 251</a>
	    </div>
	    <div class="navbar-collapse collapse navbar-inverse-collapse">
	        <ul class="nav navbar-nav">
	            <li class="dropdown">
	                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Docentes<b class="caret"></b></a>
	                <ul class="dropdown-menu">
	                    <li><a href="{{URL::to('/docente-create')}} ">Nuevo docente</a></li>
	                    <li><a href="{{URL::to('/docentes')}} ">Lista de docentes</a></li>
	                </ul>
	            </li>
	        </ul>
	        <ul class="nav navbar-nav">
	            <li class="dropdown">
	                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Materias<b class="caret"></b></a>
	                <ul class="dropdown-menu">
	                    <li><a href="{{URL::to('/materia-create')}}">Nueva Materia</a></li>
	                    <li><a href="{{URL::to('/materias')}}">Lista de Materias</a></li>
	                </ul>
	            </li>
	        </ul>
	        <ul class="nav navbar-nav">
	            <li class="dropdown">
	                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Horario<b class="caret"></b></a>
	                <ul class="dropdown-menu">
	                    <li><a href="{{URL::to('/horarios/matutino', ['turno_id' => 1])}}">Horarios Matutinos</a></li>
	                    <li class="divider"></li>
	                    <li><a href="{{URL::to('/horarios/vespertino', ['turno_id' => 2])}}">Horarios Vespertinos</a></li>
	                </ul>
	            </li>
	        </ul>
	        <ul class="nav navbar-nav navbar-right">
				
				<li><a href="{{URL::action('AuthController@logOut')}}">Cerrar Sesión</a></li>
				<li><a href="#"></a></li>
			</ul>
	    </div>
	</div>

	@yield('content')

	<div class="container">
		<footer>
			<p>
				<span class="glyphicon glyphicon-copyright-mark"></span>
				<span class="glyphicon glyphicon-registration-mark"></span> CBTIS #251 2014
			</p>
			<p class="text-muted">
				<span class="glyphicon glyphicon-bookmark icon min"></span> Sistema Desarrollado por Ing. Informática
			</p>
		</footer>
	</div>

	<script src=" {{ asset('js/jquery.min.js') }} "></script>
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

	@yield('script')
	
</body>
</html>