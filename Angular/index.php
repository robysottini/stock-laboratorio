<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es-AR" ng-app="stockLaboratorioApp"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!-- Indica que se use el motor de renderizado más nuevo que tenga el cliente instalado --> 
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Stock del laboratorio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- AngularJS
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->        
        <script src="scripts/angular.js"></script>
        <script src="scripts/angular-animate.js"></script>

        <!-- Librerías JS de terceras partes (siempre debajo de la librería de angular.js)
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <script src="scripts/ui-bootstrap-tpls.js"></script>
        <script src="scripts/angular-ui-router.min.js"></script>

        <!-- Requerido por algunos módulos de AngularStrap -->
        <script src="scripts/angular-sanitize.js"></script>
        <!-- Código JavaScript de la librería AngularStrap -->
        <script src="scripts/angular-strap.js"></script>        
        <!-- Plantillas en línea HTML por defecto usadas por las directivas de AngularStrap -->
        <script src="scripts/angular-strap.tpl.js"></script>

        <script src="scripts/angular-smart-table.min.js"></script>
        <script src="scripts/lodash.min.js"></script>
        <!-- Configuraciones de la tabla Smart Table. -->
        <script src="scripts/smart-table.js"></script>
        <!-- Dos librerías para <select> de Angular Strap. -->
        <link rel="stylesheet" href="css/libs.min.css">
        <link rel="stylesheet" href="css/docs.min.css">

        <!-- Librerías CSS de terceras partes
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <!-- Angular Motion: Animaciones CSS3. -->
        <link rel="stylesheet" href="css/angular-motion.min.css">
        <!-- Bootstrap: Framework HTML, CSS y JS para desarrollo responsivo. -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <!-- Normalize: Alternativa HTML5 a los resets de CSS. -->
        <link rel="stylesheet" href="css/normalize.css">

        <!-- stockLaboratorioApp (Proceso de bootstrapping)
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <script src="app/stockLaboratorioApp.module.js"></script>

        <!-- donantes
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <script src="app/donantes/donantes.module.js"></script>
        <script src="app/donantes/donantes.controller.js"></script>

        <!-- Aguja
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <script src="app/aguja/aguja.module.js"></script>
        <script src="app/aguja/aguja.controller.js"></script>
        <script src="app/aguja/aguja.controller.datepicker.js"></script>

        <!-- Comprimido
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <script src="app/comprimido/comprimido.module.js"></script>
        <script src="app/comprimido/comprimido.controller.js"></script>
        <script src="app/comprimido/comprimido.controller.datepicker.js"></script>

        <!-- Guante
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <script src="app/guante/guante.module.js"></script>
        <script src="app/guante/guante.controller.js"></script>
        <script src="app/guante/guante.controller.datepicker.js"></script>

        <!-- Jeringa
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <script src="app/jeringa/jeringa.module.js"></script>
        <script src="app/jeringa/jeringa.controller.js"></script>
        <script src="app/jeringa/jeringa.controller.datepicker.js"></script>

        <!-- Reactivo
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <script src="app/reactivo/reactivo.module.js"></script>
        <script src="app/reactivo/reactivo.controller.js"></script>
        <script src="app/reactivo/reactivo.controller.datepicker.js"></script>

        <!-- Torniquete
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <script src="app/torniquete/torniquete.module.js"></script>
        <script src="app/torniquete/torniquete.controller.js"></script>
        <script src="app/torniquete/torniquete.controller.datepicker.js"></script>

        <!-- Unidad
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <script src="app/unidad/unidad.module.js"></script>
        <script src="app/unidad/unidad.controller.js"></script>
        <script src="app/unidad/unidad.controller.datepicker.js"></script>

        <!-- pestanas
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <script src="app/pestanas/pestanas.module.js"></script>
        <script src="app/pestanas/pestanas.config.js"></script>
        <script src="app/pestanas/pestanas.controller.js"></script>

        <!-- Estilos personalizados
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/animaciones.css">
        <link rel="author" href="humans.txt" />

        <!-- Ícono
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

    </head>
    <body ng-cloak class="container">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div ng-include src="'app/encabezado/encabezado.html'"></div>

        <div ui-view></div>

    </body>
</html>