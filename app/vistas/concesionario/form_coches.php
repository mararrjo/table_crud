<?php
    $metodo = \core\Controlador::get_metodo_invocado();
    $accion = !preg_match("/validar$/", \core\Controlador::get_metodo_invocado()) ? 
            \core\URL::generar_sin_idioma("concesionario/".$metodo."_validar") : 
            \core\URL::generar_sin_idioma("concesionario/".$metodo);
    if(preg_match("/modificar|eliminar/", \core\Controlador::get_metodo_invocado())){
        $accion = $accion.$datos["values"]["id"];
    }
?>
<form method="post" name="formulario" id="<?php echo \core\Controlador::get_metodo_invocado(); ?>" action="<?php echo $accion ?>">
    <input type="hidden" id="id" name="id" value="<?php echo $datos["values"]["id"] ?>">
    <p>Por favor, rellene todos los campos del formulario.</p>
    <label>Matrícula:</label>
    <input type="text" id="matricula" name="matricula" required value="<?php echo $datos["values"]["matricula"] ?>">
    <?php echo \core\HTML_Tag::span_error("matricula", $datos) ?><br>
    <label>Fabricacion:</label>
    <input type="date" id="fabricacion" name="fabricacion" required value="<?php echo $datos["values"]["fabricacion"] ?>">
    <?php echo \core\HTML_Tag::span_error("fabricacion", $datos) ?><br>
    <label>Marca:</label>
    <select id="marca" name="marca">
        <option name="op_marca" value="Audi">Audi</option>
        <option name="op_marca" value="BMW">BMW</option>
        <option name="op_marca" value="Ford">Ford</option>
        <option name="op_marca" value="Honda">Honda</option>
        <option name="op_marca" value="Hyundai">Hyundai</option>
        <option name="op_marca" value="Mercedes">Mercedes</option>
        <option name="op_marca" value="Peugeot">Peugeot</option>
        <option name="op_marca" value="Renault">Renault</option>
        <option name="op_marca" value="Seat">Seat</option>
    </select><br>
    <label>Modelo:</label>
    <input type="text" id="modelo" name="modelo" required value="<?php echo $datos["values"]["modelo"] ?>">
    <?php echo \core\HTML_Tag::span_error("modelo", $datos) ?><br>
    <label>Versión:</label>
    <input type="text" id="version" name="version" required value="<?php echo $datos["values"]["version"] ?>">
    <?php echo \core\HTML_Tag::span_error("version", $datos) ?><br>
    <label>Combustible:</label><br>
    <input type="radio" name="combustible" value="Gasolina" checked="checked">Gasolina
    <input type="radio" name="combustible" value="Diesel" >Diesel<br>
    <?php echo \core\HTML_Tag::span_error("combustible", $datos) ?><br>
    <label>Precio:</label>
    <input type="text" id="precio" name="precio" required value="<?php echo $datos["values"]["precio"] ?>">
    <?php echo \core\HTML_Tag::span_error("precio", $datos) ?><br>
    <input type="submit" name="bAceptar" value="Aceptar">
    <input type="button" name="bCancelar" value="Cancelar" onclick="location.assign('<?php echo \core\URL::generar_sin_idioma("concesionario/index") ?>');" >
</form>
<script type="text/javascript">
    //Selecciona el radio correspondiente para la columna combustible
    var combustible = "<?php echo $datos["values"]["combustible"] ?>";
    var radios = document.getElementsByName('combustible');
    for(i = 0; i < radios.length; i++){
        if(radios[i].value==combustible){
            radios[i].setAttribute("checked","checked");
        }
    }
    
    //Selecciona el option correspondiente para la columna marca 
    var marca = "<?php echo $datos["values"]["marca"] ?>";
    var options = document.getElementsByName("op_marca");
    for(i = 0; i < options.length; i++){
        if(options[i].value==marca){
            options[i].setAttribute("selected","selected");
        }
    }
</script>