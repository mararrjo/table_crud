<?php
namespace controladores;

class concesionario extends \core\Controlador {
    
    public function index(array $datos = array()){
        
        $datos["coches"] = \modelos\Modelo_SQL::tabla("coches")->select();
        
        $datos["view_content"] = \core\Vista::generar(__FUNCTION__, $datos);
        $http_body = \core\Vista_Plantilla::generar("plantilla_principal", $datos);
        \core\HTTP_Respuesta::enviar($http_body);
        
    }
    
    public function form_anadir(array $datos = array()){
        
        $datos["coche"] = array(
            "matricula"=>"",
            "fabricacion"=>"",
            "marca"=>"",
            "modelo"=>"",
            "version"=>"",
            "combustible"=>"",
            "precio"=>"",
            );
        
        $datos["view_content"] = \core\Vista::generar(__FUNCTION__, $datos);
        $http_body = \core\Vista_Plantilla::generar("plantilla_principal", $datos);
        \core\HTTP_Respuesta::enviar($http_body);
        
    }
    
    public function form_anadir_validar(array $datos = array()){
        
        $datos["coche"] = \core\HTTP_Requerimiento::request();
        echo "<pre>";
        print_r($datos["coche"]);
        echo "</pre>";
        $datos["view_content"] = \core\Vista::generar("form_anadir", $datos);
        $http_body = \core\Vista_Plantilla::generar("plantilla_principal", $datos);
        \core\HTTP_Respuesta::enviar($http_body);
        
    }
    
}