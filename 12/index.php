<?php

// Definição da calsse abstratra Personagem
abstract class Personagem {
    // Atributos protegidos para encapsulamento
    protected $nome;
    protected $pontosVida;    
    protected $poderAtaque;
    private $vivo;

    // Método construtor
    public function __construct($nome, $pontosVida, $poderAtaque)
    {
        $this->nome = $nome;
        $this->pontosVida = $pontosVida;
        $this->poderAtaque = $poderAtaque;
        $this->vivo = true;
    }

    // Método para exibir dados do personagem
    public function exibirDados() {
        echo "Nome: {$this->nome}, Pontos de Vida: {$this->pontosVida}, Vivo: " . 
        ($this->vivo? 'Sim' : 'Não') . "<br>";
    }

    abstract public function atacar($inimgo);

    public function sofrerDano($danoSofrido) {
        $this->pontosVida -= $danoSofrido;

        if($this->pontosVida <= 0) {
            $this->morrer();
        }
    }

    public function recuperarVida($quantidade) {
        $this->pontosVida += $quantidade;
        echo "{$this->nome} recuperou $quantidade pontos de vida. <br>";
    }

    private function morrer() {
        $this->vivo = false;
        echo "{$this->nome} morreu. <br>";
    }
}

class Guerreiro extends Personagem {
    private $poderEscudo;
    private $ataqueEspada;

    public function __construct($nome, $pontosVida, $poderAtaque, $poderEscudo)
    {
        parent::__construct($nome, $pontosVida, $poderAtaque);
        $this->poderEscudo = $poderEscudo;
        $this->ataqueEspada = 5;
    }

    public function atacar($inimgo)
    {
        $dano = $this->poderAtaque + $this->ataqueEspada;
        $inimgo->sofrerDano($dano);
    }
}

class Mago extends Personagem {
    private $pontosMagia;

    public function __construct($nome, $pontosVida, $poderAtaque, $pontosMagia)
    {
        parent::__construct($nome, $pontosVida, $poderAtaque);
        $this->pontosMagia = $pontosMagia;
    }

    public function atacar($inimgo)
    {
        if($this->pontosMagia > 5) {
            $inimgo->sofrerDano($this->poderAtaque);
            $this->pontosMagia -= 5;
        }
    }
}

// Não é possível instanciar um objeto a partir de uma classe abstrata
//$personagem1 = new Personagem();

$guerreiro = new Guerreiro("Aragorn", 100, 20, 10);
$mago = new Mago("Gandalf", 80, 30, 10);

echo "Dados do Guerreiro: <br>";
$guerreiro->exibirDados();

echo "Dados do Mago: <br>";
$mago->exibirDados();

echo "Guerreiro atacou o Mago: <br>";
$guerreiro->atacar($mago);
$mago->exibirDados();

echo "Mago atacou o Guerreiro: <br>";
$mago->atacar($guerreiro);
$guerreiro->exibirDados();
?>