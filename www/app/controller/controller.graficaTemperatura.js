angular.module('CamaraTermicaApp').controller('graficaTemperaturaController', ['$scope', '$timeout', function ($scope, $timeout) {
        $scope.fechaInicio = '';
        $scope.fechaFin = '';
        $scope.options = {
            elements: {
                line: {
                    tension: 0
                }
            }
        };

//    $scope.submit = function () {

        $scope.labels = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio"];
        $scope.series = ['Series Temperatura'];
        $scope.data = [
            [65, 59, 80, 81, 56, 55, 40]
        ];
//    };

    }]);


