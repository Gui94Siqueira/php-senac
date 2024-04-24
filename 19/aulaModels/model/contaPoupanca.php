<?php
require_once './19/aulaModels/model/conta.php';

class ContaPoupanca extends Conta {
    // Atributos específicos da ContaPoupanca
    private $taxaRendimento;

    // Método construtor
    public function __construct($cliente, $numero, $saldo, $taxaRendimento) {
        parent::__construct($cliente, $numero, $saldo);
        $this->taxaRendimento = $taxaRendimento;
    }

    // Metodo para aplicar rendimetno
    public function aplicarRendimento() {
        $this->saldo += $this->saldo * $this->taxaRendimento;
    }
}
?>