angular.module('CamaraTermicaApp').controller('graficaHumedadRController', ['$scope', '$timeout', function ($scope, $timeout) {
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
        $scope.series = ['Series Relativa'];
        $scope.data = [
            [30, 80, 40, 54, 44, 56, 51]
        ];
//    };

    }]);



