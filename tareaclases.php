<?php
class Album {
    //atributos
    private $nombre_album = "These days";
    private $nombre_cancion = "Hearts Breaking Even";
    private $fecha_publicacion = 1995;

    //metodos
    public function Mostrar(){
        return $this->getAlbum()."<br>".$this->getCancion()."<br>".$this->getYear()."<br>";
    }

    private function getAlbum(){
        return $this->nombre_album;
    }

    private function getCancion(){
        return $this->nombre_cancion;
    }

    private function getYear(){
        return $this->fecha_publicacion;
    }

}
// objetos (guadados en variables)
$album = new Album();
echo $album->Mostrar()."<br>";

?>