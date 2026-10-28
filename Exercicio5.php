<?php

abstract class FormaGeometrica{
    abstract public function calcularArea();
}

class Retangulo extends FormaGeometrica{
    protected float $base;
    protected float $altura;

    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea(){
        return $this->base * $this->altura;
    }
}

class Circulo extends FormaGeometrica{
    protected $raio;

    public function __construct($raio){
        $this->raio = $raio;
    }

    public function calcularArea(){
        return 3.14 * ($this->raio * $this->raio);
    }
}

$retangulo = new Retangulo(8, 5);
echo "Área do retângulo: " . $retangulo->calcularArea() ." cm²";
echo "<br>";
$circulo = new Circulo(4);
echo "Área do círculo: " . $circulo->calcularArea() . " cm²";

?>