angular.module('CamaraTermicaApp').service('relativaService', ['$http', function ($http) {

        this.obtenerRelativa = $http.get('http://localhost/CamaraTermica/www/server.php/obtenerHumedadR');
    }]);