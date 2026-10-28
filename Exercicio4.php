<?php

abstract class Eletrodomestico{
    protected string $marca;

    public function __construct($marca){
        $this->marca = $marca;
    }
    public function getMarca(){
        echo $this->marca;
    }
    abstract public function ligar();
}

class Televisao extends Eletrodomestico{
    public function ligar(){
        echo "A televisão".  $this->marca ." está ligando...";
    }
}
class Geladeira extends Eletrodomestico{
    public function ligar(){
        echo "A Geladeira" .  $this->marca ." está ligando...";
    }
}


$assistir = new Televisao("Samsung");
$assistir->ligar();
echo "<br>";
$gelar = new Geladeira("Brastemp");
$gelar->ligar();
?>