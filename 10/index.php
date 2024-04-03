<?php

class Carro {
    // Propriedaes
    public $marca;
    public $modelo;
    public $ano;

    // Método Construtor
    public function __construct($marca, $modelo, $ano)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    // Função / comportamento / Método
    public function ligar() {
        echo 'O carro está ligado. <br>';
    }
}

$meuCarro = new Carro("Toyota", "Corolla", 2022);
echo "$meuCarro->marca, $meuCarro->modelo, $meuCarro->ano <br>";
$meuCarro->ligar();
?>