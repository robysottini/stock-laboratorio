/**
 * @desc Controlador PestanasController.
 * @author Roberto Sottini <robysottini@gmail.com>
 */

(function() {
    'use strict';

    angular
        .module('stockLaboratorioApp.pestanas')
        .controller('PestanasController', PestanasController);

    PestanasController.$inject = ['$scope', '$rootScope', '$state'];

    function PestanasController($scope, $rootScope, $state) {
        $scope.go = function(route) {
            $state.go(route);
        };

        $scope.active = function(route) {
            return $state.is(route);
        };

        $scope.tabs = [{
            heading: 'Aguja', 
            route:   'main.estadoAguja', 
            active:  false
        }, 
        {
            heading: 'Comprimido', 
            route:   'main.estadoComprimido', 
            active:  false
        }, 
        {
            heading: 'Guante', 
            route:   'main.estadoGuante', 
            active:  false
        }, 
        {
            heading: 'Jeringa', 
            route:   'main.estadoJeringa', 
            active:  false
        }, 
        {
            heading: 'Reactivo', 
            route:   'main.estadoReactivo', 
            active:  false
        }, 
        {
            heading: 'Torniquete', 
            route:   'main.estadoTorniquete', 
            active:  false
        }, 
        {
            heading: 'Unidad', 
            route:   'main.estadoUnidad', 
            active:  false
        }, 
        {
            heading: 'Donantes', 
            route:   'main.estadoDonantes', 
            active:  false
        }];

        $scope.$on('$stateChangeSuccess', function() {
            $scope.tabs.forEach(function(tab) {
                tab.active = $scope.active(tab.route);
            });
        });
    }
})();