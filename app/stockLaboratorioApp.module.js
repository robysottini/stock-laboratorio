/**
 * Módulo principal stockLaboratorioApp.
 * Dependencias: ngAnimate, ui.bootstrap, ngSanitize, mgcrea.ngStrap, smart-table, etc.
 * @author Roberto Sottini <robysottini@gmail.com>
 */
 
(function() {
    'use strict';
    
    angular
        .module('stockLaboratorioApp', [
            'ngAnimate', 
            'ui.bootstrap', 
            'ui.router', 
            'ngSanitize', 
            'mgcrea.ngStrap', 
            'smart-table',
            'stockLaboratorioApp.comprimido',
            'stockLaboratorioApp.guante',
            'stockLaboratorioApp.jeringa',
            'stockLaboratorioApp.pestanas',
            'stockLaboratorioApp.reactivo',
            'stockLaboratorioApp.torniquete',
            'stockLaboratorioApp.unidad'
        ]);
})();