angular.module('CamaraTermicaApp').service('temperaturaService', ['$http', function ($http) {

        this.obtenerTemp = $http.get('http://localhost/CamaraTermica/www/server.php/obtenerTemperatura');
    }]);