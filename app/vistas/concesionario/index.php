<div class="seccion">
    <h1 class="subtitulo">Concesionario</h1>
        <table id="tabla_listado">
            <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Fabricación</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Version</th>
                    <th>Combustible</th>
                    <th>Precio</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos["coches"] as $coche): ?>
                    <tr>
                        <td><?php echo $coche["matricula"] ?></td>
                        <td><?php echo \core\Conversiones::fecha_mysql_a_es($coche["fabricacion"]) ?></td>
                        <td><?php echo $coche["marca"] ?></td>
                        <td><?php echo $coche["modelo"] ?></td>
                        <td><?php echo $coche["version"] ?></td>
                        <td><?php echo $coche["combustible"] ?></td>
                        <td><?php echo $coche["precio"] ?></td>
                        <td>
                            <?php echo \core\HTML_Tag::a_boton_onclick("boton", array("concesionario", "form_modificar", $coche["id"]), "Modificar") ?>
                            <?php echo \core\HTML_Tag::a_boton_onclick("boton", array("concesionario", "form_eliminar", $coche["id"]), "Eliminar") ?>
                            <!--<a href="<?php // echo \core\URL::generar("concesionario/form_modificar"); ?>"><button class="boton">Modificar</button></a>-->
                            <!--<a href="<?php // echo \core\URL::generar("concesionario/form_eliminar/" . $coche["id"]); ?>"><button class="boton">Eliminar</button></a>-->
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="9"><a href="<?php echo \core\URL::generar_sin_idioma("concesionario/form_anadir") ?>"><button id="botonAnexar">Añadir</button></a></td>
                </tr>
            </tbody>
        </table>
    <!--</form>-->
</div>