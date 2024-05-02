<?php
class Pedido implements JsonSerializable {
    private $id;
    private $data_pedido;
    private $status;
    private $produtos; // Adicionado pelo repository na consulta

    public function __construct($id, $data_pedido, $status) {
        $this->id = $id;
        $this->data_pedido = $data_pedido;
        $this->status = $status;
    }

    public function getDataPedido() {
        return $this->data_pedido;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setData($data) {
        $this->data_pedido = $data;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function setProdutos($produtos) {
        $this->produtos = $produtos;
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