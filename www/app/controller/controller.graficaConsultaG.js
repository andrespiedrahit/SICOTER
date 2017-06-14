angular.module('CamaraTermicaApp').controller('graficaConsultaGController', ['$scope', function ($scope) {

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
        $scope.series = ['Series Temperatura, Relativa, Suelo'];
        $scope.data = [
            [65, 59, 80, 81, 56, 55, 40],
            [30, 80, 40, 54, 44, 56, 51],
            [13, 78, 23, 26, 87, 77, 85]
        ];

    }]);


