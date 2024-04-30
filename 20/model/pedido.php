<?php
    class Pedido implements JsonSerializable {
        private $id;
        private $data_pedido;
        private $status;
        private $produtos;
        public function __construct($id, $data_pedido, $status) {
            $this->id = $id;
            $this->data_pedido = $data_pedido;
            $this->status = $status;
            $this->produtos = [];
        }

        public function getId() {
            return $this->id;
        }

        public function getData_pedido() {
            return $this->data_pedido;
        }

        public function getStatus() {
            return $this->status;
        }

        public function getPedidoProdutos() {
            return $this->produtos;
        }

        public function jsonSerialize(): array {
            return [
                'id' => $this->id,
                'data_pedido' => $this->data_pedido,
                'status' => $this->status
            ];
        }
    }

?>