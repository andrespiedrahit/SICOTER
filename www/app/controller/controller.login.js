angular.module('CamaraTermicaApp').controller('loginController', ['$scope', 'securityService', '$localStorage', '$sessionStorage', '$location', 'rolAdmin', function ($scope, security, $localStorage, $sessionStorage, $location, rolAdmin) {
        $scope.datos = {};
        $scope.usuarioErroneo = false;
        $scope.submit = function () {

            $.ajax({
                url: 'http://localhost/cras/www/server.php/login',
                type: 'POST',
                data: $scope.datos,
                success: function (response) {
                    if (response.codigo == 500) {
                        $scope.$apply(function () {
                            $scope.usuarioErroneo = true;
                            $scope.datos = {};
                        });
                    } else {
                        $scope.$apply(function () {
                            $sessionStorage.usuario = response.usuario[0];
                            if ($sessionStorage.usuario.rol_id == rolAdmin) {
                                $location.path('/inicioSistemaControl');
                            } else {
                                $location.path('/moduloInteractuar');
                            }
                        });
                    }
                }
            });
        };
    }]);