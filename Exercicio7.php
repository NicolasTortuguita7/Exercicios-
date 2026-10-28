<?php

abstract class ContaBancaria{
    protected string $titular;
    protected float $saldo;

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function depositar($valor){
        if($valor > 0){
            $this->saldo += $valor;
        }
    }

    abstract public function calcularTarifa();
}

class ContaCorrente extends ContaBancaria{
    public function calcularTarifa(){
        return 15;
    }
}

class ContaPoupanca extends ContaBancaria{
    public function calcularTarifa(){
        return 0;
    }
}

$corrente = new ContaCorrente("Carlos", 500);
$corrente->depositar(200);

echo "Conta Corrente<br>";
echo "Saldo: " . $corrente->getSaldo() . "<br>";
echo "Tarifa:  " . $corrente->calcularTarifa() . "<br>";
echo "Saldo após tarifa:  " . $corrente->getSaldo() - $corrente->calcularTarifa() . "<br>";
echo "<br><br>";
$poupanca = new ContaPoupanca("Pedro", 500);
$poupanca->depositar(200);
echo "Conta Poupança<br>";
echo "Saldo: " . $poupanca->getSaldo() . "<br>";
echo "Tarifa: " . $poupanca->calcularTarifa() . "<br>";
echo "Saldo após tarifa: " . $poupanca->getSaldo()  -  $poupanca->calcularTarifa() . "<br>";

?>