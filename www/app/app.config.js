/* variables constantes que diferencian los roles*/
angular.module('CamaraTermicaApp').constant('rolAdmin', 1);
angular.module('CamaraTermicaApp').constant('rolInvitado', 2);
angular.module('CamaraTermicaApp').constant('urlServer', 'http://localhost/CamaraTermica/www/server.php/');
//
///*middleware que comprueba laas session y los tipos de roles*/
angular.module('CamaraTermicaApp').config(['$middlewareProvider',
    function middlewareProviderConfig($middlewareProvider) {
        $middlewareProvider.map({
            'comprobarSession': ['$localStorage', '$sessionStorage', function comprobarSession($localStorage, $sessionStorage) {
                    middlewareComprobarSession(this, $localStorage, $sessionStorage);
                }],
            'comprobarPermisoDeAdmnistracion': ['$localStorage', '$sessionStorage', 'rolAdmin', function comprobarPermisoDeAdmnistracion($localStorage, $sessionStorage, rolAdmin) {
                    middlewareComprobarPermisoDeAdmnistracion(this, $localStorage, $sessionStorage, rolAdmin);
                }],
            'comprobarPermisoInvitado': ['$localStorage', '$sessionStorage', 'rolInvitado', function comprobarPermisoInvitado($localStorage, $sessionStorage, rolInvitado) {
                    middlewarecomprobarPermisoInvitado(this, $localStorage, $sessionStorage, rolInvitado);
                }],
            'comprobarNoTenerSesion': ['$localStorage', '$sessionStorage', 'rolAdmin', function comprobarPermisoInvitado($localStorage, $sessionStorage, rolAdmin) {
                    middlewarecomprobarNoTenerSesion(this, $localStorage, $sessionStorage, rolAdmin);
                }]
        });
    }]);

/**configuracion de enrutamiento*/

angular.module('CamaraTermicaApp').config(['$routeProvider', '$httpProvider', function config($routeProvider, $httpProvider) {
        $httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded; charset=UTF-8';
        $routeProvider.
                when('/login', {
                    controller: 'loginController',
                    templateUrl: 'app/template/login.html',
                    middleware: ['comprobarNoTenerSession']
                }).
                when('/', {
                    controller: 'indexController',
                    templateUrl: 'app/template/index.html',
                    middleware: ['comprobarNoTenerSession']
                }).
                when('/logout', {
                    controller: 'logoutController',
                    template: '<p>Cerrando Session...</p>',
                    middleware: ['comprobarSession']
                }).
                when('/', {
                    controller: 'indexController',
                    templateUrl: 'app/template/index.html'
                }).
                when('/logout', {
                    controller: 'logoutController',
                    template: '<p>Cerrando Session...</p>',
                    middleware: ['comprobarSession']
                }).
                when('/registrate', {
                    controller: 'registrateController',
                    templateUrl: 'app/template/registrate.html',
                    middleware: ['comprobarNoTenerSession']
                }).
                when('/modulo', {
                    controller: 'moduloController',
                    templateUrl: 'app/template/moduloInteractuar.html',
                    middleware: ['comprobarSession']
                }).
                when('/temperatura', {
                    controller: 'temperaturaController',
                    templateUrl: 'app/template/temperatura.html',
                    middleware: ['comprobarSession']
                }).
                when('/monitoreo', {
                    controller: 'monitoreoController',
                    templateUrl: 'app/template/monitoreo.html',
                    middleware: ['comprobarSession']
                }).
                when('/graficaTemperatura', {
                    controller: 'graficaTemperaturaController',
                    templateUrl: 'app/template/graficaTemperatura.html',
                    middleware: ['comprobarSession']
                }).
                when('/humedadR', {
                    controller: 'humedadRController',
                    templateUrl: 'app/template/humedadR.html',
                    middleware: ['comprobarSession']
                }).
                when('/graficaHumedadR', {
                    controller: 'graficaHumedadRController',
                    templateUrl: 'app/template/graficaHumedadR.html',
                    middleware: ['comprobarSession']
                }).
                when('/humedadS', {
                    controller: 'humedadSController',
                    templateUrl: 'app/template/humedadS.html',
                    middleware: ['comprobarSession']
                }).
                when('/graficaHumedadS', {
                    controller: 'graficaHumedadSController',
                    templateUrl: 'app/template/graficaHumedadS.html',
                    middleware: ['comprobarSession']
                }).
                when('/consultaG', {
                    controller: 'consultaGController',
                    templateUrl: 'app/template/consultaG.html',
                    middleware: ['comprobarSession']
                }).
                when('/graficaConsultaG', {
                    controller: 'graficaConsultaGController',
                    templateUrl: 'app/template/graficaConsultaG.html',
                    middleware: ['comprobarSession']
                }).
                when('/inicioSistemaControl', {
                    controller: 'inicioSistemaControlController',
                    templateUrl: 'app/template/inicioSistemaControl.html',
                    middleware: ['comprobarSession', 'comprobarPermisoAdministracion']
                }).
                when('/sistemaControl', {
                    controller: 'sistemaControlController',
                    templateUrl: 'app/template/sistemaControl.html',
                    middleware: ['comprobarSession', 'comprobarPermisoAdministracion']
                }).
                when('/valvula', {
                    controller: 'valvulaController',
                    templateUrl: 'app/template/valvula.html',
                    middleware: ['comprobarSession', 'comprobarPermisoAdministracion']
                }).
                when('/extractores', {
                    controller: 'extractoresController',
                    templateUrl: 'app/template/extractores.html',
                    middleware: ['comprobarSession', 'comprobarPermisoAdministracion']
                }).
                otherwise('/');
    }
]);


