angular.module('CamaraTermicaApp').
        config(['$routeProvider',
            function config($routeProvider) {
                $routeProvider.
                        when('/', {
                            controller: 'indexController',
                            templateUrl: 'app/template/index.html'
                        }).
                        when('/login', {
                            controller: 'loginController',
                            templateUrl: 'app/template/login.html'
                        }).
                        when('/registrate', {
                            controller: 'registrateController',
                            templateUrl: 'app/template/registrate.html'
                        }).
                        when('/modulo', {
                            controller: 'moduloController',
                            templateUrl: 'app/template/moduloInteractuar.html'
                        }).
                        when('/temperatura', {
                            controller: 'temperaturaController',
                            templateUrl: 'app/template/temperatura.php'
                        }).
                        when('/monitoreo', {
                            controller: 'monitoreoController',
                            templateUrl: 'app/template/monitoreo.html'
                        }).
                        when('/graficaTemperatura', {
                            controller: 'graficaTemperaturaController',
                            templateUrl: 'app/template/graficaTemperatura.html'
                        }).
                        when('/humedadR', {
                            controller: 'humedadRController',
                            templateUrl: 'app/template/humedadR.html'
                        }).
                        when('/graficaHumedadR', {
                            controller: 'graficaHumedadRController',
                            templateUrl: 'app/template/graficaHumedadR.html'
                        }).
                        when('/humedadS', {
                            controller: 'humedadSController',
                            templateUrl: 'app/template/humedadS.html'
                        }).
                        when('/graficaHumedadS', {
                            controller: 'graficaHumedadSController',
                            templateUrl: 'app/template/graficaHumedadS.html'
                        }).
                        when('/consultaG', {
                            controller: 'consultaGController',
                            templateUrl: 'app/template/consultaG.html'
                        }).
                        when('/graficaConsultaG', {
                            controller: 'graficaConsultaGController',
                            templateUrl: 'app/template/graficaConsultaG.html'
                        }).
                        otherwise('/');
            }
        ]);


