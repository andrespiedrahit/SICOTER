angular.module('CamaraTermicaApp').service('servidorService', ['$http', 'urlServer', function ($http, urlServer) {
        this.getMuestreoTemperatura = $http.get(urlServer + 'muestreoTemperatura');
    }]);