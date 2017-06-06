angular.module('CamaraTermicaApp').controller('sistemaUsuariosController', ['$scope', 'registroUsuarioService', '$sessionStorage', '$location', '$route', '$timeout', function ($scope, agregarUsuario, $sessionStorage, $location, $route, $timeout) {

        $scope.dataRegistrarUsuario = {
            id:'',
            alias: '',
            cedula: '',
            nombre: '',
            apellido: '',
            correo: '',
            rolid: '',
            contrasena: ''
        };
        $scope.usuarioRegistrado = false;
        $scope.usuarios = [];
        $scope.edit = {};

        $scope.pintarTabla = function () {
            agregarUsuario.obtenerUsu.then(function successCallback(response) {
                switch (response.data.code) {
                    case 200:
                        $scope.usuarios = response.data.datos;
                        break;
                    case 500:
                        $scope.usuarios = [];
                }
            });
        };

        $scope.pintarTabla();

        $scope.submit = function () {
            agregarUsuario.agregarUsu($scope.dataRegistrarUsuario).then(function successCallback(response) {
                // console.log(response);

                $scope.usuarioRegistrado = false;
                $scope.dataRegistrarUsuario = {};
                if (response.data.code == 500) {
                } else {
                    $scope.usuarioRegistrado = true;
                    $scope.dataRegistrarUsuario = '';
                    $timeout(function () {
                        $('#nuevoUsuario').modal('toggle');
                    }, 700);
                    $timeout(function () {
                        // $route.reload();
                        window.location.reload();
                    }, 1000);
                }
            }, function errorCallback(response) {
                console.error(response);
            });

        };


        $scope.editar = function (dato) {
            $scope.edit.id = dato.usu_id;
            $scope.edit.alias = dato.usu_alias;
            $scope.edit.nombre = dato.usu_nombre;
            $scope.edit.alias = dato.usu_apellido;
            $scope.edit.contrasena = dato.usu_contrasena;
            $scope.edit.rolid = dato.rol_id;
            $scope.edit.correo = dato.usu_correo;
            
            

            $('#editarUsuario').modal('toggle');
        };

        $scope.submitEditarUsuario = function () {
            agregarUsuario.editarUsu($scope.edit).then(function successCallback(response) {
                $scope.usuarioEditado = false;
                $scope.edit = {};
                if (response.data.code == 500) {
                } else {
                    $scope.usuarioEditado = true;
                    $scope.edit = '';
                    $timeout(function () {
                        $('#editarUsuario').modal('toggle');
                    }, 700);
                    $timeout(function () {
                        // $route.reload();
                        //window.location.reload();
                    }, 1000);
                }
            }, function errorCallback(response) {
                console.error(response);
            });
        };

//
//        $scope.eliminar = function (dato) {
//            $('#eliminarUsuario').modal('toggle');
//            $scope.cedula = dato.usu_cedula;
//            $scope.ideliminar = dato.usu_id;
//        };
//
//        $scope.submitEliminarUsuario = function () {
//            agregarUsuario.eliminarUsu({id: $scope.ideliminar}).then(function successCallback(response) {
//                $scope.usuarioEliminado = false;
//                if (response.data.code == 500) {
//                } else {
//                    $scope.usuarioEliminado = true;
//                    $timeout(function () {
//                        $('#eliminarUsuario').modal('toggle');
//                    }, 700);
//                    $timeout(function () {
//                        // $route.reload();
//                        window.location.reload();
//                    }, 1000);
//                }
//            }, function errorCallback(response) {
//                console.error(response);
//            });
//        };

    }]);