angular.module('CamaraTermicaApp').controller('temperaturaController', ['$scope', 'temperaturaService', function ($scope, servidorService) {

        $scope.tablaTem = {};

        $scope.pintarTabla = function () {
            servidorService.obtenerTemp.then(function successCallback(response) {
                switch (response.data.code) {
                    case 200:
                        $scope.tablaTem = response.data.datos;
                        break;
                    case 500:
                        $scope.tablaTem = {};
                }
            });
        };

        $scope.pintarTabla();
    }]);
