app.controller('ciclo', ['$scope', '$http', function($scope, $http){
	$scope.ciclo1 = function(){
		alert('Periodo AGOSTO - DICIEMBRE');

		$http.post('/cbtis/ciclos', {
			 ciclo: 1
		})

		.success(function(data, status){
			
		})

		.error(function(data, status){
			alert('Error con el sistema'+status);
		});

		$http.post('/cbtis/grupos', {
			 ciclo: 1
		})

		.success(function(data, status){
			
		})

		.error(function(data, status){
			alert('Error con el sistema'+status);
		});

		$http.get('/cbtis/ciclos')

		.success(function(data, status){
			console.log(data);
		});
	}

	$scope.ciclo2 = function(){
		alert('Periodo ENERO - JULIO');

		$http.post('/cbtis/ciclos', {
			 ciclo: 2
		})

		.success(function(data, status){
			
		})

		.error(function(data, status){
			alert('Error con el sistema'+status);
		});

		$http.get('/cbtis/ciclos')

		.success(function(data, status){
			console.log(data);
		});

		/***********************************/

		$http.post('/cbtis/grupos', {
			 ciclo: 2
		})

		.success(function(data, status){
			
		})

		.error(function(data, status){
			alert('Error con el sistema'+status);
		});
	}

}]);