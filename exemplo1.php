<?php
class Animal{

    public function EmitirSom(){
        echo "Som desconhecido...";
    }
}
class Gato extends Animal{
    public function emitirSom(){
        echo "Miauuuuu!<br>";
    }
    
}
class Cachorro extends Animal{
    public function EmitirSom(){
        Echo "Auau!<br>";
    }
}

$gato = new Gato();
$gato->EmitirSom();

$cachorro = new Cachorro();
$cachorro->EmitirSom();

?>