<?php
class Animal {
public $nombre;
public $color;
public $estaExtincion;
public $archivoSonido;

public function __construct($nombre1,
$color1,$estaExtincion1,$archivoSonidol) {
$this->nombre= $nombre1;
$this->color = $color1;
$this->estaExtincion = $estaExtincion1;
$this->archivoSonido = $archivoSonidol;
}

public function obtenerInformacion() {
    $colortext=$this->color =="Verde" ? "\033[32m": "";
    $mensaje="Nombre: ".$this->nombre
    ."\n". "Color: ".$colortext.$this->color."\033[0m"
    ."\n". "En Extinción?: ".($this->estaExtincion ? "Si": "No");
    return $mensaje;
    }
    public function hacerSonido() {
        $audiofile="C:\\xampp\\htdocs\\JULIO\\php_ejemplos\\".$this->archivoSonido;
        shell_exec("start wmplayer ".escapeshellarg ($audiofile));
}
}
class Perro extends Animal{
    public function hacerSonido($sonido=""){
        parent::hacerSonido();
        return $sonido;
    }
}
?>