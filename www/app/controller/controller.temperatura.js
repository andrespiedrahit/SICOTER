angular.module('CamaraTermicaApp').controller('temperaturaController', ['$scope', 'servidorService', function ($scope, servidorService) {
        $scope.dataTable = [];

//        $scope.consultar = function () {
//            servidorService.getMuestreoTemperatura.then(function successCallback(response) {
//                $scope.dataTable = response.data;
//            }, function errorCallback(response) {
//                console.log(response);
//            });
//        };

        servidorService.getMuestreoTemperatura.then(function successCallback(response) {
            $scope.dataTable = response.data;
        }, function errorCallback(response) {
            console.log(response);
        });
    }]);
