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
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
		        {{ Form::open(['action' => 'AuthController@postLogin']) }}
					<h3 class="form-signin-heading text-center">Login</h3>
        			@if(Session::has('mensaje_error'))
    				<div class="alert alert-dismissable alert-info">
    				  	<button type="button" class="close" data-dismiss="alert">×</button>
	    	            {{ Session::get('mensaje_error') }}
    				</div>
        	        @endif
					<div class="form-group">
						<label for="username">Usuario</label>
						<input type="text" name="username" class="form-control" placeholder="Username" required/>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control" placeholder="Password" required>
					</div>
					
					<button class="btn btn-lg btn-primary btn-block">Sign in</button>
		        {{ Form::close() }}
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
	<div class="container">
		<footer>
			<p>
				<span class="glyphicon glyphicon-copyright-mark"></span>
				<span class="glyphicon glyphicon-registration-mark"></span> CBTIS #251 2014
			</p>
			<p class="text-muted">
				<span class="glyphicon glyphicon-bookmark icon min"></span> Sistema Desarrollado por L Enrique
			</p>
		</footer>
	</div>

	<script src=" {{ asset('js/jquery.min.js') }} "></script>
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>