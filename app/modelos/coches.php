<?php

namespace modelos;

class coches extends \core\sgbd\bd {

    public static $tabla = "coches";
    
    public static $validaciones = array(
//            "id" => "errores_referencia:id/coches/id",
            "matricula" => "errores_requerido && errores_texto",
            "fabricacion" => "errores_requerido",
            "marca" => "errores_requerido && errores_texto",
            "modelo" => "errores_requerido && errores_texto",
            "version" => "errores_requerido && errores_texto",
            "combustible" => "errores_requerido && errores_texto",
            "precio" => "errores_requerido && errores_precio"
        );

    public static function insertar(array &$fila) {
    
        return self::insert($fila, self::$tabla);
        
    }
    
    public static function modificar(array &$fila) {
    
        return self::update($fila, self::$tabla);
        
    }
    
    public static function eliminar(array &$fila) {
    
        return self::delete($fila, self::$tabla);
        
    }

}
