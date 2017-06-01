angular.module('CamaraTermicaApp').controller('registrarUsuarioController', ['$scope', 'crudUsuarioService', 'rolAdmin','rolInvitado', function ($scope, crudUsuarioService, rolAdmin, rolInvitado) {

    $scope.datosusu = {};
    $scope.usuarioGuardado = false;
    $scope.guardarUsuario = function () {
      if ($scope.datosusu.rol == 'Administrador')
        $scope.datosusu.rol = rolAdmin;
      else
        $scope.datosusu.rol = rolInvitado;
      console.log($scope.datosusu);
      crudUsuarioService.guardarUsuario($scope.datosusu).then(function successCallback(respuesta) {
        console.log(respuesta);
        if (respuesta.data.codigo == 200) {
          $scope.datosusu = {};
          $scope.usuarioGuardado = true;
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

