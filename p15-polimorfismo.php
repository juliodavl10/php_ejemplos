<?php

include ("p12-clase.php");

    interface Figura {

        public function calcularArea();
    }

    class Triangulo implements Figura {
        public $base;
        public $altura;

        public function __construct($b,$h){
            $this->base = $b;
            $this->altura = $h;
        }
        public function calcularArea() {
            $area = ($this->base * $this->altura) / 2;
            return $area;
        }
    }
    class Rectangulo implements Figura {
        public $base;
        public $altura;

        public function __construct($b,$a){
            $this->base = $b;
            $this->altura = $a;
        }
        public function calcularArea() {
            $area = ($this->base * $this->altura);
            return $area;
        }
    }
    class Cuadrado implements Figura {
        public $lado;

        public function __construct($l){
            $this->lado = $l;
        }
        public function calcularArea() {
            
            $calculadora = new calculadora($this->lado,2);
            $area = ($calculadora->potencia());
            return $area;
        }
    }
    class Circulo implements Figura {
        public $radio;


        public function __construct($r){
            $this->radio = $r;
        }
        public function calcularArea() {
            
            $calculadora = new calculadora($this->radio,2);
            $area = (pi() * $calculadora->potencia());
            return $area;
        }
    }
?>