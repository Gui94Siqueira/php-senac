<?php
    class Cliente {
        public $nome;
        protected  $cpf;

        public function __construct($nome, $cpf)
        {
            $this->nome = $nome;
            $this->cpf = $cpf;
        }
    }

    abstract class Conta {
        protected $cliente;
        protected $numero;
        protected $saldo;

        public function __construct($cliente, $numero, $saldo)
        {
            $this->cliente = $cliente;
            $this->numero = $numero;
            $this->saldo = $saldo;
        }

        abstract public function sacar($valorSaque);
   
        public function depositar($valorDeposito)
        {
            if($valorDeposito > 0) {
                $this->saldo += $valorDeposito;
                return true;
            }

            return false;
        }

        public function transferir($valorTransferencia, $contaDestino)
        {
            if($this->sacar($valorTransferencia)) {
                $contaDestino->depositar($valorTransferencia);
                return true;
            }

            return false;
        }

        public function exibirDados() {
             return "Numero {$this->numero} - Saldo: {$this->saldo} - Cliente: {$this->cliente->nome}";
        }
    }

    class ContaCorrente extends Conta {
        private $limiteEspecial;

        public function __construct($cliente, $numero, $saldo, $limiteEspecial)
        {
            parent::__construct($cliente, $numero, $saldo);
            $this->limiteEspecial = $limiteEspecial;
        }

        public function sacar($valorSaque) 
        {
            $valorLimiteEspecial = $this->saldo + $this->limiteEspecial;

            if($valorSaque <= $valorLimiteEspecial) {
                return $this->saldo -= $valorSaque;
            }

            return false;
        }
    }

    class ContaPoupanca extends Conta {
        private $taxaRendimento;

        public function __construct($cliente, $numero, $saldo, $taxaRendimento)
        {
            parent::__construct($cliente, $numero, $saldo);
            $this->taxaRendimento = $taxaRendimento;
        }

        public function sacar($valorSaque)
        {
            if($this->saldo >= $valorSaque && $valorSaque > 0) {
                $this->saldo -= $valorSaque;
                return true;
            }

            return false;
        }

        public function aplicarRendimento()
        {
            $this->saldo += $this->saldo * $this->taxaRendimento;
        }
    }

    // Criando instâncias de Cliente
    $cliente1 = new Cliente("João", "123456789-00");
    $cliente2 = new Cliente("Maria", "987654321-00");

    // Cirando instâncias de Contas
    $contaCorrente1 = new ContaCorrente($cliente1, 1001, 1500, 500);
    $contaPouapanca1 = new ContaPoupanca($cliente1, 2001, 3000, 0.05);
    $contaCorrente2 = new ContaCorrente($cliente2, 1002, 3000, 1000);

    // Realizando operações nas contas
    $contaCorrente1->sacar(100);
    $contaCorrente2->transferir(200, $contaPouapanca1);
    $contaPouapanca1->aplicarRendimento();

    // Exibindo dados das contas:
    echo "Dados da Conta Corrente 1: {$contaCorrente1->exibirDados()} <br>"; 
    echo "Dados da Conta Poupança 1: {$contaPouapanca1->exibirDados()} <br>";
    echo "Dados da Conta Corrente 2: {$contaCorrente2->exibirDados()} <br>";
?>