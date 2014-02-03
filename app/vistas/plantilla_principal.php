<!DOCTYPE HTML>
<html lang='<?php echo \core\Idioma::get(); ?>'>
    <head>
        <title><?php echo TITULO; ?></title>
        <meta name="Description" content="Explicación de la página" /> 
        <meta name="Keywords" content="palabras en castellano e ingles separadas por comas" /> 
        <meta name="Generator" content="esmvcphp framewrok" /> 
        <meta name="Origen" content="esmvcphp framework" /> 
        <meta name="Author" content="Jose María Martín Arroyo" /> 
        <meta name="Locality" content="Madrid, España" /> 
        <meta name="Lang" content="es" /> 
        <meta name="Viewport" content="maximum-scale=10.0" /> 
        <meta name="revisit-after" content="1 days" /> 
        <meta name="robots" content="INDEX,FOLLOW,NOODP" /> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf8" /> 
        <meta http-equiv="Content-Language" content="es"/>

        <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <link href="favicon.ico" rel="icon" type="image/x-icon" /> 

        <link rel="stylesheet" type="text/css" href="<?php echo URL_ROOT; ?>recursos/css/principal.css" />

        <script type='text/javascript' src="<?php echo URL_ROOT . "recursos" . DS . "js" . DS . "jquery" . DS . "jquery-1.10.2.min.js"; ?>" ></script>
        <script type='text/javascript' src="<?php echo URL_ROOT."recursos".DS."js".DS."general.js"; ?>" ></script>
    </head>

    <body style="background: url(<?php echo URL_ROOT."recursos/imagenes/fondo_autopista.jpg" ?>)">

        <!-- Contenido que se visualizará en el navegador, organizado con la ayuda de etiquetas html -->
        <div id="cabecera">
            <h1 id="titulo">Gestión de bases de datos</h1>
            <div id="div_menu">
                <ul id="menu" class="menu">
                    <li class="item"><a href="<?php echo \core\URL::generar("inicio/index") ?>">Inicio</a></li>
                    <li class="item"><a href="<?php echo \core\URL::generar("concesionario/index") ?>">Concesionario</a></li>
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
            <hr>
            Página desarrollada por <b>Jose María Martín Arroyo</b> <a href="mailto:chemari70@gmail.com">Contactar</a><br />
            Fecha última actualización: 1 de febrero de 2013.
        </div>

        <?php echo \core\HTML_Tag::post_request_form(); ?>
        
    </body>

</html>