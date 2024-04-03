<?php

    #Encapsulamento
    class produto {
        private $nome;
        private $preco;
        private static $quantidadeVendida = 0;

        public function __construct($nome, $preco)
        {
            $this->nome = $nome;
            $this->preco =$preco;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($novoNome) {
            if(strlen($novoNome) >= 3) {
                $this->nome = $novoNome;    
            } else {
                echo "Nome de produto precisa ter ao menos 3 caracteres";
            }
        }

        public function vender() {
            self::$quantidadeVendida++;
            echo "Produto $this->nome vendido! <br>";
        }

        public static function exibirQuantidadeVendida() {
            echo "Quantidade de produtos vendidos: " . self::$quantidadeVendida . "<br>";
        }
    }

    $produto1 = new Produto("Livro", 29.99);
    $produto2 = new Produto("Caneta", 2.99);
    
    $produto1->vender();
    $produto2->vender();

    Produto::exibirQuantidadeVendida();
    
    // $produto1->nome = ""
    // echo $produto1->nome;
    $produto1->setNome("Livro A <br>");
    echo $produto1->getNome();
    echo "<br>";

?>