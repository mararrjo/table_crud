<?php
namespace modelos;

/**
 * Esta clase contiene el nombre de la tabla que gestiona en la base de datos,
 * las validaciones que necesita y los metodos para insertar, modificar y eliminar.
 * 
 * @author Jose María Martin Arroyo <chemari70@gmail.com>
 * 
 */
class coches extends \core\sgbd\bd {

    /**
     * Almacena el nombre de la tabla.
     * 
     * @var String
     */
    public static $tabla = "coches";
    
    /**
     * Contiene una clave-valor por cada columna, excepto para id, que se gestiona
     * de manera interna en los formularios. Ademas al ser auto-incremental no es 
     * necesario precisarlo al añadir un nuevo coche.
     *
     * @var array Almacena las validaciones para los formularios.
     * 
     */
    public static $validaciones = array(
//            "id" => "errores_referencia:id/coches/id",
            "matricula" => "errores_requerido && errores_texto",
            "fabricacion" => "errores_requerido && errores_fecha",
            "marca" => "errores_requerido && errores_texto",
            "modelo" => "errores_requerido && errores_texto",
            "version" => "errores_requerido && errores_texto",
            "combustible" => "errores_requerido && errores_texto",
            "precio" => "errores_requerido && errores_precio"
        );

    /**
     * 
     * Inserta en la tabla coches de la base de datos una nueva fila. El array 
     * $fila contiene los datos con las columnas a insertar.
     * 
     * @param array $fila, contiene los datos del coche, cada columna es la clave
     * y el valor su contenido.
     * @return boolean True, si se ha insertado con éxito en la base de datos
     * False en caso contrario.
     */
    public static function insertar(array &$fila) {
    
        return self::insert($fila, self::$tabla);
        
    }
    
    /**
     * 
     * Modifica en la tabla coches de la base de datos una fila ya existente.
     * El array $fila contiene los datos con las columnas que se modificaran.
     * 
     * @param array $fila, contiene los datos del coche, cada columna es la clave
     * y el valor su contenido.
     * @return boolean True, si se ha modificado con éxito en la base de datos
     * False en caso contrario.
     */
    public static function modificar(array &$fila) {
    
        return self::update($fila, self::$tabla);
        
    }
    
    /**
     * 
     * Elimina de la tabla coches de la base de datos una fila existente.
     * El array $fila tiene los datos de la fila que se borrará.
     * 
     * @param array $fila, contiene los datos del coche, cada columna es la clave
     * y el valor su contenido.
     * @return boolean True, si se ha eliminado con éxito en la base de datos
     * False en caso contrario.
     */
    public static function eliminar(array &$fila) {
    
        return self::delete($fila, self::$tabla);
        
    }

}
