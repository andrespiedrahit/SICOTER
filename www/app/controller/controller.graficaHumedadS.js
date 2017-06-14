angular.module('CamaraTermicaApp').controller('graficaHumedadSController', ['$scope', '$timeout', function ($scope, $timeout) {
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
        $scope.series = ['Series Suelo'];
        $scope.data = [
            [13, 78, 23, 26, 87, 77, 85]
        ];
//    };

    }]);

