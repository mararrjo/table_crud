<?php
namespace core;

/**
 * Esta clase define un autocargador que cargará correctamente clases que se instancien así new \nombre_namespace\nombre_clase(), donde nombre_namespace será el nombre del namespace del fichero que contiene la clase, y también será el nombre de la carpeta contenida en ...\app y que contiene el fichero php con la clase (...\app\nombre_namespace\nombre_clase.php)
 * 
 * Exige que el nombre de todas las carpetas y de todos los ficheros estén escritos en minúsculas.
 *  
 * @author Jesús María de Quevedo Tomé <jequeto@gmail.com>
 * @since 20130130
 */
class Autoloader {
	
	static $depuracion = false;
	
	function __construct() {
		if (self::$depuracion) {
			echo "<hr />";
			echo __METHOD__." -> Arrancando el autoloader<br />";
		}
		spl_autoload_register(array($this, 'autoload')); // Esta es la función que registra la función que se activará cada vez que se intente instanciar una clase o se usar una clase estáticamente.
	}
	
	
	/**
	 * Esta es la función que tiene la "inteligencia" para buscar los ficheros por las carpetas del disco del servidor
	 * @param string $class_name
	 * @return boolean
	 * @throws \Exception
	 */
	function autoload($class_name) {
		
		if (self::$depuracion) {
			echo "<br /><hr />";
			echo __METHOD__." -> \$class_name= $class_name"."<br />";
		}
		if (class_exists($class_name)) {
			// Si la clase existe es que ya está cargada
			if (self::$depuracion) { echo __METHOD__." -> EXISTE \$class_name= $class_name"."<br />";}
			return;
		}
		// Sustituir las \ que separan el namespaces del nombre de la clase por DS que separa carpetas
		$class_name = str_replace(array("\\", ), array(DS , ), $class_name);
		
		$fichero_clase = strtolower(PATH_APP.$class_name.".php");
		
		if ( ! file_exists($fichero_clase)) {
			if (self::$depuracion) {
				echo __METHOD__.": NO EXISTE \$fichero_clase= $fichero_clase"."<br />";
			}
			$class_name = str_replace(
				array("controlador"), 
				array("controladores"),
				$class_name
			);
			$fichero_clase = PATH_APP.$class_name.".php";
		}
		
		if ( ! file_exists($fichero_clase) ) {
			// Buscamos en las clases de la librería de dompdf
			$fichero_clase = strtolower(PATH_APP."lib/php/dompdf/include/$class_name.cls.php");
		}
		
		if ( file_exists($fichero_clase) ) {
			
			if (self::$depuracion) {echo __METHOD__.": EXISTE y CARGANDO ... \$fichero_clase= $fichero_clase"."<br />";}
			require_once $fichero_clase;
		}
		else {
			
			throw new \Exception(__METHOD__.": NO EXISTE \$fichero_clase= $fichero_clase");
		}
		
	}
	
} // Fin de la clase