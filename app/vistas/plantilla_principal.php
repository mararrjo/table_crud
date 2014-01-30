<!DOCTYPE HTML>
<html lang='<?php echo \core\Idioma::get(); ?>'>
    <head>
        <title><?php echo \core\Idioma::text("title", "plantilla_internacional"); ?></title>
        <meta name="Description" content="Explicación de la página" /> 
        <meta name="Keywords" content="palabras en castellano e ingles separadas por comas" /> 
        <meta name="Generator" content="esmvcphp framewrok" /> 
        <meta name="Origen" content="esmvcphp framework" /> 
        <meta name="Author" content="Jose María Martín Arroyo" /> 
        <meta name="Locality" content="Madrid, España" /> 
        <meta name="Lang" content="<?php echo \core\Idioma::get(); ?>" /> 
        <meta name="Viewport" content="maximum-scale=10.0" /> 
        <meta name="revisit-after" content="1 days" /> 
        <meta name="robots" content="INDEX,FOLLOW,NOODP" /> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf8" /> 
        <meta http-equiv="Content-Language" content="<?php echo \core\Idioma::get(); ?>"/>

        <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <link href="favicon.ico" rel="icon" type="image/x-icon" /> 

        <link rel="stylesheet" type="text/css" href="<?php echo URL_ROOT; ?>recursos/css/principal.css" />
        <style type="text/css" >
            /* Definiciones hoja de estilos interna */
        </style>
        <?php if (isset($_GET["administrator"])): ?>
            <link rel="stylesheet" type="text/css" href="<?php echo URL_ROOT; ?>recursos/css/administrator.css" />
        <?php endif; ?>

        <script type='text/javascript' src="<?php echo URL_ROOT . "recursos" . DS . "js" . DS . "jquery" . DS . "jquery-1.10.2.min.js"; ?>" ></script>
        <script type='text/javascript' src="<?php echo URL_ROOT . "recursos" . DS . "js" . DS . "general.js"; ?>" ></script>
        <script type="text/javascript" src=""></script>

        <script type="text/javascript" >
            /* líneas del script */

        </script>

    </head>

    <body>

        <!-- Contenido que se visualizará en el navegador, organizado con la ayuda de etiquetas html -->
        <div id="cabecera">
            <h1 id="titulo">Sitio de gestión de tablas</h1>
            <div id="div_menu" >
                <ul id="menu" class="menu">
                    <li class="item"><a href="<?php echo \core\URL::generar_sin_idioma("inicio/index") ?>">Inicio</a></li>
                    <li class="item"><a href="<?php echo \core\URL::generar_sin_idioma("concesionario/index") ?>">Concesionario</a></li>
                </ul>
            </div>
        </div>

        <div id="cuerpo">

            <div id="view_content">

                <?php
                echo $datos['view_content'];
                ?>
            </div>
        </div>



        <div id="pie">

            Pie del documento.<br />
            Documento creado por Jesús María de Quevedo Tomé. <a href="mailto:jequeto@gmail.com">Contactar</a><br />
            Fecha última actualización: 15 de diciembre de 2013.
        </div>

    </body>

</html>