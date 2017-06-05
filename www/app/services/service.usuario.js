angular.module('CamaraTermicaApp').service('registroUsuarioService', ['$http', function($http){
    
    this.agregarUsu = function (data) {
      return $http.post('http://localhost/CamaraTermica/www/server.php/agregarUsuario', $.param(data));
    };
//
    this.obtenerUsu = $http.get('http://localhost/CamaraTermica/www/server.php/obtenerUsuario');
    
    this.editarUsu = function (data) {
      return $http.post('http://localhost/CamaraTermica/www/server.php/editarUsuario', $.param(data));
    };
    
    this.eliminarUsu = function (data) {
      return $http.post('http://localhost/CamaraTermica/www/server.php/eliminarUsuario', $.param(data));
    };
    
}]);