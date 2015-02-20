'use strict';

var app = angular.module('horario', []);

app.controller('horario', function($scope, $http){

	$scope.tipo = 'button';
	$scope.valorBoton = 'Favor de completar';
	$scope.grupo_id = 1;
	
	$scope.boton = function(){
		if ($scope.hora_id != null) {
			if ($scope.docente_id != null) {
				if ($scope.dia_id != null) {
					$scope.valorBoton = 'Enviar';
					$scope.tipo = 'submit';
				}
			}
		}

	}

});



