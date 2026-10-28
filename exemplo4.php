<?php

 abstract class Carro{
    abstract public function acelerar();
}

class CarroCombustao extends Carro{
    public function acelerar(){
        echo "Injetando Combústivel";
    }
}

class Carroeletrico extends Carro{
    public function acelerar(){
        echo "Injetando energia";
    }
}
$carroCombustao = new CarroCombustao();
$carroCombustao->acelerar();
echo "<br>";
$carroEletrico = new Carroeletrico();
$carroEletrico->acelerar();

?>