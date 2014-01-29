<div>
    <h1>Concesionario</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
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
                    <td><?php echo $coche["id"] ?></td>
                    <td><?php echo $coche["matricula"] ?></td>
                    <td><?php echo $coche["fabricacion"] ?></td>
                    <td><?php echo $coche["marca"] ?></td>
                    <td><?php echo $coche["modelo"] ?></td>
                    <td><?php echo $coche["version"] ?></td>
                    <td><?php echo $coche["combustible"] ?></td>
                    <td><?php echo $coche["precio"] ?></td>
                    <td>
                        <a href="<?php echo \core\URL::generar("concesionario/form_modificar/".$coche["id"]); ?>"><button>Modificar</button></a>
                        <a href="<?php echo \core\URL::generar("concesionario/form_eliminar/".$coche["id"]); ?>"><button>Eliminar</button></a>
                    </td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="9"><a href="<?php echo \core\URL::generar_sin_idioma("concesionario/form_anadir") ?>"><button>Añadir</button></a></td>
            </tr>
        </tbody>
    </table>
</div>