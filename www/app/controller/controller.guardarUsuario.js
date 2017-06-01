angular.module('CamaraTermicaApp').controller('guardarUsuarioController', ['$scope', 'crudUsuarioService','rolAdmin','rolInvitado', function ($scope, crudUsuarioService,rolAdmin,rolInvitado) {
        $scope.datousu= {};
        $scope.usuGuardado=false;
        $scope.guardaUsuario =function (){
          if ($scope.datousu.rol == 'Administrador')
        $scope.datousu.rol = rolAdmin;
      else
        $scope.datousu.rol = rolInvitado;
      console.log($scope.datousu);
      
      crudUsuarioService.guardaUsuario($scope.datousu).then(function successCallback(respuesta) {
        console.log(respuesta);
        if (respuesta.data.codigo == 200) {
          $scope.datousu = {};
          $scope.usuGuardado = true;
          $scope.tabla = respuesta.data.usuario;
        }

      }, function errorCallback(respuesta) {
        console.log(respuesta);
      });
    };


    function cargarTabla() {
      crudUsuarioService.cargarTabla.then(function successCallback(respTabla) {
        console.log(respTabla);
        $scope.tabla = respTabla.data.usuario;
      }, function errorCallback(respTabla) {
        console.log(respTabla);
      });
    }
  }]);

