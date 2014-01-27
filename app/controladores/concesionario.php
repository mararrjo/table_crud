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
        
        $datos["view_content"] = \core\Vista::generar(__FUNCTION__, $datos);
        $http_body = \core\Vista_Plantilla::generar("plantilla_principal", $datos);
        \core\HTTP_Respuesta::enviar($http_body);
        
    }
    
}