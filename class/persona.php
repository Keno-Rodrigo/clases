<?php
class Persona{

    private $nombre;
    private $edad;
    private $correo;

    public function setNombre(String $nombre){
        $this->nombre = $nombre;
    }

    public function setEdad(Int $edad){
        $this->edad = $edad;
    }

    public function setCorreo($correo){
        $this->correo = $correo;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function getCorreo(){
        return $this->correo;
    }

    private function query(String $qry){ //Parametro con tipo, arrojara error si no es del tipo esperado
        $resultado = array();

        $con = new mysqli("127.0.0.1", "root", "", "personas");

        $res = $con->query($qry) or die($con->error);

        while($row = $res->fetch_object()) {
            $resultado[] = $row;
        }
        return $resultado;

    }

    public function crearUsuario(String $name, Int $age, String $mail){
        $msg = null;
        $sql = "insert into usuarios set nombre ='$name', edad =$age, correo='$mail' ";
        if($this->query($sql)){
            $msg = 'Creación Exitosa';
        }else{
            $msg = 'Fallo en la creación de Usuario';
        }
        return $msg;
    }

    public function listarUsuarios(){
        $sql= "select * from usuarios";
        $res = $this->query($sql);
        if(count($res) > 0){
            return $res;
        }else{
            return false;
        }
    }
}


