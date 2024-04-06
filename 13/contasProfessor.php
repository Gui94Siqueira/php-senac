<?php
// Definição da classe Cliente
class Cliente {
    // Atributos
    private $nome;
    private $cpf;

    // Método construtor
    public function __construct($nome, $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome() {
        return $this->nome;
    }

    public function __toString() {
        return "Nome: $this->nome - CPF: $this->cpf";
    }
}

abstract class Conta {
    // Atributos
    protected $cliente;
    protected $numero;
    protected $saldo;

    // Método Construtor
    public function __construct($cliente, $numero, $saldo) {
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

// Definição da classe ContaCorrente, que herda de Conta
class ContaCorrente extends Conta {
    // Atributos específicos da ContaCorrente
    private $limiteChequeEspecial;

    // Método construtor
    public function __construct($cliente, $numero, $saldo, $limiteChequeEspecial) {
        parent::__construct($cliente, $numero, $saldo);
        $this->limiteChequeEspecial = $limiteChequeEspecial;
    }

    // Método para com limite do cheque especial (Virtual)
    public function sacar($valorSaque) {
        $valorLimiteEspecial = $this->saldo + $this->limiteChequeEspecial;
        if($valorSaque <= $valorLimiteEspecial) {
            return parent::sacar($valorSaque);
        }

        return false;
    }
}

// Definição da classe ContaPuapanca, que herda de Conta
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

// Criando instâncias de Cliente
$cliente1 = new Cliente("João", "123456789-00");
$cliente2 = new Cliente("Maria", "987654321-00");

// Cirando instâncias de Contas
$contaCorrente1 = new ContaCorrente($cliente1, 1001, 1500, 500);
$contaPouapanca1 = new ContaPoupanca($cliente1, 2001, 3000, 0.05);
$contaCorrente2 = new ContaCorrente($cliente2, 1002, 3000, 1000);

// Realizando operações nas contas
$contaCorrente1->sacar(100);
$contaPouapanca1->sacar(200);
$contaCorrente2->transferir(200, $contaPouapanca1);
$contaPouapanca1->aplicarRendimento();

// Exibindo dados das contas:
echo "Dados da Conta Corrente 1: $contaCorrente1 <br>";
echo "Dados da Conta Poupança 1: $contaPouapanca1 <br>";
echo "Dados da Conta Corrente 2: $contaCorrente2 <br>";

echo "Deposito de 1000 reais em cada conta: <br>";
$contaCorrente1->depositar(1000);
$contaPouapanca1->depositar(1000);
$contaCorrente2->depositar(1000);

// Exibindo dados das contas pós depósitos:
echo "Dados da Conta Corrente 1: $contaCorrente1 <br>";
echo "Dados da Conta Poupança 1: $contaPouapanca1 <br>";
echo "Dados da Conta Corrente 2: $contaCorrente2 <br>";
?>