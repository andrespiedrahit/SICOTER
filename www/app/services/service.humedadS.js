angular.module('CamaraTermicaApp').service('humedadSService', ['$http', function ($http) {

        this.obtenerSuelo = $http.get('http://localhost/CamaraTermica/www/server.php/obtenerHumedadS');
    }]);