<?php
    $metodo = \core\Controlador::get_metodo_invocado();
    $accion = !preg_match("/validar$/", $metodo) ? 
            \core\URL::generar("concesionario/".$metodo."_validar") : 
            \core\URL::generar("concesionario/".$metodo);
    
    // Esto pone el id en la url en los metodos de modificar y eliminar
//    if(preg_match("/modificar|eliminar/", \core\Controlador::get_metodo_invocado())){
//        $accion = $accion.$datos["values"]["id"];
//    }
?>
<form method="post" class="formulario" name="formulario" action="<?php echo $accion ?>">
    <input type="hidden" id="id" name="id" value="<?php echo $datos["values"]["id"] ?>">
    <h3 id="rellenar">Por favor, rellene todos los campos del formulario.</h3>
    <label>Matrícula:</label>
    <input type="text" id="matricula" name="matricula" required value="<?php echo $datos["values"]["matricula"] ?>"><br>
    <?php echo \core\HTML_Tag::span_error("matricula", $datos) ?><br>
    <label>Fabricacion (dd/mm/yyyy):</label>
    <input type="date" id="fabricacion" name="fabricacion" required value="<?php echo $datos["values"]["fabricacion"] ?>"><br>
    <?php echo \core\HTML_Tag::span_error("fabricacion", $datos) ?><br>
    <label>Marca:</label>
    <select id="marca" name="marca">
        <option name="op_marca" value="Audi">Audi</option>
        <option name="op_marca" value="BMW">BMW</option>
        <option name="op_marca" value="Chevrolet">Chevrolet</option>
        <option name="op_marca" value="Ford">Ford</option>
        <option name="op_marca" value="Honda">Honda</option>
        <option name="op_marca" value="Hyundai">Hyundai</option>
        <option name="op_marca" value="Mazda">Mazda</option>
        <option name="op_marca" value="Mercedes">Mercedes</option>
        <option name="op_marca" value="Peugeot">Peugeot</option>
        <option name="op_marca" value="Renault">Renault</option>
        <option name="op_marca" value="Seat">Seat</option>
        <option name="op_marca" value="Subaru">Subaru</option>
        <option name="op_marca" value="Toyota">Toyota</option>
    </select><br><br>
    <label>Modelo:</label>
    <input type="text" id="modelo" name="modelo" required value="<?php echo $datos["values"]["modelo"] ?>"><br>
    <?php echo \core\HTML_Tag::span_error("modelo", $datos) ?><br>
    <label>Versión:</label>
    <input type="text" id="version" name="version" required value="<?php echo $datos["values"]["version"] ?>"><br>
    <?php echo \core\HTML_Tag::span_error("version", $datos) ?><br>
    <label>Combustible:</label><br>
    <input type="radio" name="combustible" value="Gasolina" checked="checked">Gasolina
    <input type="radio" name="combustible" value="Diesel" >Diesel<br>
    <?php echo \core\HTML_Tag::span_error("combustible", $datos) ?><br>
    <label>Precio:</label>
    <input type="text" id="precio" name="precio" required value="<?php echo \core\Conversiones::decimal_punto_a_coma($datos["values"]["precio"]) ?>"><br>
    <?php echo \core\HTML_Tag::span_error("precio", $datos) ?><br>
    <input type="submit" class="botonForm" name="bAceptar" value="Aceptar">
    <input type="button" class="botonForm" name="bCancelar" value="Cancelar" onclick="location.assign('<?php echo \core\URL::generar_sin_idioma("concesionario/index") ?>');" >
</form>

<script type="text/javascript">

    //Selecciona el radio correspondiente para la columna combustible.
    var combustible = "<?php echo $datos["values"]["combustible"] ?>";
    var radios = document.getElementsByName('combustible');
    for(i = 0; i < radios.length; i++){
        if(radios[i].value==combustible){
            radios[i].setAttribute("checked","checked");
        }
    }
    
    //Selecciona el option correspondiente para la columna marca.
    var marca = "<?php echo $datos["values"]["marca"] ?>";
    var options = document.getElementsByName("op_marca");
    for(i = 0; i < options.length; i++){
        if(options[i].value==marca){
            options[i].setAttribute("selected","selected");
        }
    }

    //Si se esta eliminando, inhabilito todas las entradas para que no se 
    // pueda escribir.
    if(/eliminar/.test("<?php echo $metodo ?>")){
        $("input").attr("readonly","readonly");
        $("select").attr("disabled","disabled");
        $("input[type='radio']").attr("disabled","disabled");
        $("#rellenar").hide();
    }
    
</script>