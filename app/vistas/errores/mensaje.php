<div id='errores_mensaje'>
<?php
	if ( ! isset($datos['mensaje'])) {
			echo "<p>Error indefinido</p>";
	}
	else {
		echo "<h2>{$datos['mensaje']}</h2>";
	}

	if (isset($datos['url_continuar']))
		echo "<p><a href='{$datos['url_continuar']}'>Continuar</a></p>";

?>
</div>