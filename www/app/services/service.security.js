angular.module('CamaraTermicaApp').service('securityService', ['$http', function ($http) {
        /*enviar parametros*/
        this.validateUserAndPassword = function (data){
            return $http.post('http://localhost/CamaraTermica/www/server.php/login',$param(data));
        };
        /*resivir parametros*/
//        this.getUser=$http.get('http://localhost/CamaraTermica/www/server.php/obtener_usuarios');
    }]);