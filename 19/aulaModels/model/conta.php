<?php
abstract class Conta {
    // Atributos
    protected $id
    protected $cliente;
    protected $numero;
    protected $saldo;

    // Método Construtor
    public function __construct($id, $cliente, $numero, $saldo) {
        $this->id;
        $this->cliente = $cliente;
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

    // Método para sacar
    public function sacar($valorSaque) {
        if($this->saldo >= $valorSaque && $valorSaque > 0) {
            $this->saldo -= $valorSaque;
            return true;
        }

        return false;
    }

    // Método para depositar
    public function depositar($valorDeposito) {
        if($valorDeposito > 0) {
            $this->saldo += $valorDeposito;
            return true;
        }

        return false;
    }

    // Método para transferir
    public function transferir($valorTransferencia, $contaDestino) {
        if($this->sacar($valorTransferencia)) {
            $contaDestino->depositar($valorTransferencia);
            return true;
        }

        return false;
    }

    // Método para exibir dados da conta
    public function __toString() {
        return "Numero: $this->numero - Saldo: $this->saldo - Cliente: {$this->cliente->getNome() }";
    }
}
?>