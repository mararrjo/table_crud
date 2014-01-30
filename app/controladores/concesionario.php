<?php
namespace controladores;

/**
 * @author Jose María Martin Arroyo <chemari70@gmail.com>
 * 
 * La Clase Concesionario es el controlador para el mantenimiento de la tabla
 * coches.
 * Incluye las acciones necesarias para un mantenimiento basico, como son:
 * Index: Muestra un listado con todos los coches.
 * Form_anadir: Muestra el formulario para insertar nuevos coches.
 * Form_modificar: Muestra el formulario para modificar coches existentes.
 * Form_eliminar: Te pregunta si quieres eliminar un coche seleccionado.
 * 
 * Tambien estan incluidas las validaciones de los formularios. 
 * 
 */
class concesionario extends \core\Controlador {

    public function index(array $datos = array()) {

        $datos["coches"] = \modelos\Modelo_SQL::tabla("coches")->select();

        $datos["view_content"] = \core\Vista::generar(__FUNCTION__, $datos);
        $http_body = \core\Vista_Plantilla::generar("plantilla_principal", $datos);
        \core\HTTP_Respuesta::enviar($http_body);
    }

    public function form_anadir(array $datos = array()) {

        $datos["values"] = array(
            "id" => "",
            "matricula" => "",
            "fabricacion" => "",
            "marca" => "",
            "modelo" => "",
            "version" => "",
            "combustible" => "",
            "precio" => "",
        );

        $datos["view_content"] = \core\Vista::generar(__FUNCTION__, $datos);
        $http_body = \core\Vista_Plantilla::generar("plantilla_principal", $datos);
        \core\HTTP_Respuesta::enviar($http_body);
    }

    public function form_anadir_validar(array $datos = array()) {

        if (!\core\Validaciones::errores_validacion_request(\modelos\coches::$validaciones, $datos)) {
            $datos["values"]["precio"] = \core\Conversiones::decimal_coma_a_punto($datos["values"]["precio"]);
            \modelos\Datos_SQL::tabla("coches")->insertar($datos["values"]);
            \core\HTTP_Respuesta::set_header_line("location", \core\URL::generar("concesionario/index"));
            \core\HTTP_Respuesta::enviar();
        } else {
            $datos["view_content"] = \core\Vista::generar("form_anadir", $datos);
            $http_body = \core\Vista_Plantilla::generar("plantilla_principal", $datos);
            \core\HTTP_Respuesta::enviar($http_body);
        }
    }

    public function form_modificar(array $datos = array()) {

        $id = \core\HTTP_Requerimiento::request("id");

        $coches = \modelos\Datos_SQL::tabla("coches")->select(array("where" => "id=$id"));
        if ($coches == null) {
            $datos["mensaje"] = "No existe ningun coche con ese id";
            \core\HTTP_Respuesta::cargar_controlador("errores", "index", $datos);
        } else {
            $datos["values"] = $coches[0];
            $datos["values"]["id"] = $id;
            $datos["view_content"] = \core\Vista::generar(__FUNCTION__, $datos);
            $http_body = \core\Vista_Plantilla::generar("plantilla_principal", $datos);
            \core\HTTP_Respuesta::enviar($http_body);
        }
    }

    public function form_modificar_validar(array $datos = array()) {

        if (!\core\Validaciones::errores_validacion_request(\modelos\coches::$validaciones, $datos)) {
            $datos["values"]["id"] = \core\HTTP_Requerimiento::request("id");
            $datos["values"]["precio"] = \core\Conversiones::decimal_coma_a_punto($datos["values"]["precio"]);
            \modelos\Datos_SQL::tabla("coches")->modificar($datos["values"]);
            \core\HTTP_Respuesta::set_header_line("location", \core\URL::generar("concesionario/index"));
            \core\HTTP_Respuesta::enviar();
        } else {
            $datos["view_content"] = \core\Vista::generar("form_modificar", $datos);
            $http_body = \core\Vista_Plantilla::generar("plantilla_principal", $datos);
            \core\HTTP_Respuesta::enviar($http_body);
        }
    }

    public function form_eliminar(array $datos = array()) {

        $id = \core\HTTP_Requerimiento::request("id");

        $coches = \modelos\Datos_SQL::tabla("coches")->select(array("where" => "id=$id"));

        if ($coches == null) {
            $datos["mensaje"] = "No existe ningun coche con ese id";
            \core\HTTP_Respuesta::cargar_controlador("errores", "index", $datos);
        } else {
            $datos["values"] = $coches[0];
            $datos["values"]["id"] = $id;
            $datos["view_content"] = \core\Vista::generar(__FUNCTION__, $datos);
            $http_body = \core\Vista_Plantilla::generar("plantilla_principal", $datos);
            \core\HTTP_Respuesta::enviar($http_body);
        }
    }

    public function form_eliminar_validar(array $datos = array()) {

        $id = \core\HTTP_Requerimiento::request("id");
        $coches = \modelos\Datos_SQL::tabla("coches")->select(array("where" => "id=" . $id));
        if ($coches == null) {
            $datos["mensaje"] = "No existe ningun coche con ese id";
            \core\HTTP_Respuesta::cargar_controlador("errores", "index", $datos);
        } else {
            $datos["values"] = $coches[0];
            \modelos\Datos_SQL::tabla("coches")->eliminar($datos["values"]);
            \core\HTTP_Respuesta::set_header_line("location", \core\URL::generar("concesionario/index"));
            \core\HTTP_Respuesta::enviar();
        }
    }

}
