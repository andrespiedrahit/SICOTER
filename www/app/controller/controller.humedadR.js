angular.module('CamaraTermicaApp').controller('humedadRController', ['$scope', 'relativaService', function ($scope, servidorService) {
        
        $scope.tablaHR = {};
        
        $scope.pintarTabla = function () {
            servidorService.obtenerRelativa.then(function successCallback(response) {
                switch (response.data.code) {
                    case 200:
                        $scope.tablaHR = response.data.datos;
                        break;
                    case 500:
                        $scope.tablaHR = {};
                }
            });
        };

        $scope.pintarTabla();
    }]);

