<?php

class Frete {
    public function calcularFrete($peso) {
        return 0;
    }
}

class FreteNormal extends Frete {
    public function calcularFrete($peso) {
        return 10 + (2 * $peso);
    }
}

class FreteExpresso extends Frete {
    public function calcularFrete($peso) {
        return 20 + (5 * $peso);
    }
}

class RetiradaLoja extends Frete {
    public function calcularFrete($peso) {
        return 0;
    }
}

function exibirFrete(Frete $frete, $peso) {
    $valor = $frete->calcularFrete($peso);

    echo "Valor do frete: R$ " .$valor . "<br>";
}


$normal = new FreteNormal();
$expresso = new FreteExpresso();
$retirada = new RetiradaLoja();


$peso = 5;

echo "Frete Normal: ";
exibirFrete($normal, $peso);
echo "Frete Expresso: ";
exibirFrete($expresso, $peso);
echo "Retirada na Loja: ";
exibirFrete($retirada, $peso);

?>