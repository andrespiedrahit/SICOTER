angular.module('CamaraTermicaApp').controller('humedadSController', ['$scope', 'humedadSService', function ($scope, servidorService) {

        $scope.tablaHS = {};

        $scope.pintarTabla = function () {
            servidorService.obtenerSuelo.then(function successCallback(response) {
                switch (response.data.code) {
                    case 200:
                        $scope.tablaHS = response.data.datos;
                        break;
                    case 500:
                        $scope.tablaHS = {};
                }
            });
        };

        $scope.pintarTabla();
    }]);


