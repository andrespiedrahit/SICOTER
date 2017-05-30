angular.module('CamaraTermicaApp').controller('loginController', ['$scope', 'securityService', '$localStorage', '$sessionStorage', '$location', 'rolAdmin', function ($scope, security, $localStorage, $sessionStorage, $location, rolAdmin) {
        $scope.datos = {};
        $scope.usuarioErroneo = false;
        $scope.submit = function () {

//            $.ajax({
//                url: 'http://localhost/SICOTER/www/server.php/login',
//                type: 'POST',
//                data: $scope.datos,
//                success: function (response) {
//                    if (response.codigo == 500) {
//                        $scope.$apply(function () {
//                            $scope.usuarioErroneo = true;
//                            $scope.datos = {};
//                        });
//                    } else {
//                        $scope.$apply(function () {
//                            $sessionStorage.usuario = response.usuario[0];
//                            if ($sessionStorage.usuario.rol_id == rolAdmin) {
//                                $location.path('/inicioSistemaControl');
//                            } else {
//                                $location.path('/moduloInteractuar');
//                            }
//                        });
//                    }
//                }
//           
      security.validateUserAndPassword($scope.datos).then(function successCallback(response) {
        console.log(response);
        $scope.usuarioErroneo = false;
        if (response.data.codigo == 500) {
          $scope.usuarioErroneo = true;
          $scope.datos = {};
        } else {
          $sessionStorage.usuario = response.data.usuario[0];
          if ($sessionStorage.usuario.rol_id == rolAdmin) {
            $location.path('/inicioSistemaControl');
          } else {
            $location.path('/moduloInteractuar');
          }
        }
      }, function errorCallback(response) {
        console.error(response);
      });
      
    };
  }]);

