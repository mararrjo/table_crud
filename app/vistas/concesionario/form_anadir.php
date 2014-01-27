<div>
    <h1>Añadir vehículo a la base de datos</h1>
    <form method="post" name="form_anadir" action="<?php echo \core\URL::generar_sin_idioma("concesionario/form_anadir_validar") ?>">
        <label>Matrícula:</label>
        <input type="text" name="matricula" required ><br>
        <input type="submit" name="bAceptar" value="Aceptar">
    </form>
</div>