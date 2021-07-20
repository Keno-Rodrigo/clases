<?php
require_once('class/persona.php');
//$param = array();
if(isset($_POST) and count($_POST)>0){
    foreach($_POST as $key=>$value){
        $param[$key] = $value; // $param['nombre'] = 'Mariela'
        $$key = $value; // $nombre= 'Mariela'
                        // $edad = 39
                        // $correo...
    }
// ACCION (u otro nombre ad hoc)

    switch($accion){
        case 1:
            $p = new Persona();
            echo json_encode($p->listarUsuarios());
            break;
        case 2:
            $p = new Persona();
            echo $p->crearUsuario($nombre, $edad, $correo);
            break;

    }

}