/**
 * @desc Configuración de servicios. .
 * @author Roberto Sottini <robysottini@gmail.com>
 */

(function() {
    'use strict';

    angular
        .module('stockLaboratorioApp.pestanas')
        .config(pestanas);
        
    pestanas.$inject = ['$stateProvider', '$urlRouterProvider'];

    function pestanas($stateProvider, $urlRouterProvider) {
        $urlRouterProvider.otherwise('/main/jeringa');
        $stateProvider
            .state('main', {
                url:         '/main', 
                templateUrl: 'app/pestanas/pestanas.html', 
                abtract:     true
            })
            .state('main.estadoAguja', { 
                url:          '/aguja', 
                templateUrl:  'app/aguja/aguja.html',
                controller:   'AgujaController',
                controllerAs: 'AgujaCtrl'
            })
            .state('main.estadoComprimido', { 
                url:          '/comprimido', 
                templateUrl:  'app/comprimido/comprimido.html',
                controller:   'ComprimidoController',
                controllerAs: 'comprimidoCtrl'
            })
            .state('main.estadoGuante', { 
                url:          '/guante', 
                templateUrl:  'app/guante/guante.html',
                controller:   'GuanteController',
                controllerAs: 'GuanteCtrl'
            })
            .state('main.estadoJeringa', { 
                url:          '/jeringa', 
                templateUrl:  'app/jeringa/jeringa.html',
                controller:   'JeringaController',
                controllerAs: 'jeringaCtrl'
            })
            .state('main.estadoReactivo', { 
                url:          '/reactivo', 
                templateUrl:  'app/reactivo/reactivo.html',
                controller:   'ReactivoController',
                controllerAs: 'ReactivoCtrl'
            })
            .state('main.estadoTorniquete', { 
                url:          '/torniquete', 
                templateUrl:  'app/torniquete/torniquete.html',
                controller:   'TorniqueteController',
                controllerAs: 'TorniqueteCtrl'
            })
            .state('main.estadoUnidad', { 
                url:          '/unidad', 
                templateUrl:  'app/unidad/unidad.html',
                controller:   'UnidadController',
                controllerAs: 'UnidadCtrl'
            })
            .state('main.estadoDonantes', { 
                url:          '/donantes', 
                templateUrl:  'app/donantes/donantes.html',
                controller:   'DonantesController',
                controllerAs: 'donantesCtrl'
            });
    }
})();