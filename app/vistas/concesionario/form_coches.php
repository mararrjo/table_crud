<?php
    $metodo = \core\Controlador::get_metodo_invocado();
    $accion = !preg_match("/validar$/", \core\Controlador::get_metodo_invocado()) ? 
            \core\URL::generar_sin_idioma("concesionario/".$metodo."_validar") : 
            \core\URL::generar_sin_idioma("concesionario/".$metodo);
?>
<form method="post" name="formulario" id="<?php echo \core\Controlador::get_metodo_invocado(); ?>" action="<?php echo $accion ?>">
    <p>Por favor, rellene todos los campos del formulario.</p>
    <label>Matrícula:</label>
    <input type="text" name="matricula" required value="<?php echo $datos["coche"]["matricula"] ?>"><br>
    <label>Fabricacion:</label>
    <input type="date" name="fabricacion" required value="<?php echo $datos["coche"]["fabricacion"] ?>"><br>
    <label>Marca:</label>
    <select name="marca">
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
    <input type="text" name="modelo" required value="<?php echo $datos["coche"]["modelo"] ?>"><br>
    <label>Versión:</label>
    <input type="text" name="version" required value="<?php echo $datos["coche"]["version"] ?>"><br>
    <label>Combustible:</label><br>
    <input type="radio" name="combustible" value="Gasolina" >Gasolina
    <input type="radio" name="combustible" value="Diesel" >Diesel<br>
    <label>Precio:</label>
    <input type="text" name="precio" required value="<?php echo $datos["coche"]["precio"] ?>"><br>
    <input type="submit" name="bAceptar" value="Aceptar">
    <input type="button" name="bCancelar" value="Cancelar" onclick="location.assign('<?php echo \core\URL::generar_sin_idioma("concesionario/index") ?>');" >
</form>
<script type="text/javascript">
    //Selecciona el radio correspondiente para la columna combustible
    var combustible = "<?php echo $datos["coche"]["combustible"] ?>";
    var radios = document.getElementsByName('combustible');
    for(i = 0; i < radios.length; i++){
        if(radios[i].value==combustible){
            radios[i].setAttribute("checked","checked");
        }
    }
    
    //Selecciona el option correspondiente para la columna marca 
    var marca = "<?php echo $datos["coche"]["marca"] ?>";
    var options = document.getElementsByName("op_marca");
    for(i = 0; i < options.length; i++){
        if(options[i].value==marca){
            options[i].setAttribute("selected","selected");
        }
    }
</script>