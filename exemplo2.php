<?php

class Carro{

    public function Acelerar(){
        echo "O carro está acelerando...";
    }
}
class CarroCombustao extends Carro{
    public function Acelerar(){
        echo "Injetando combustível...";

    }
}
class Carroeletrico extends Carro{
    public function Acelerar(){
        echo "Enviando energia...";
    }
}

$carro = new Carro();
$carro->Acelerar();
echo "<br>";
$carroCombustao = new CarroCombustao();
$carroCombustao->Acelerar();
echo "<br>";
$carroEletrico = new Carroeletrico();
$carroEletrico->Acelerar();

?>