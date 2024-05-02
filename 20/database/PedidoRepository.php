<?php

require_once 'DatabaseRepository.php';
require_once 'model/Pedido.php';

class PedidoRepository {
    public static function getAllPedidos() {
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM pedido");

        $pedidos = [];
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $pedido = new Pedido($row['id'], $row['data_pedido'], $row['status']);
                $pedidos[] = $pedido;
            }
        }
        $connection->close();
        return $pedidos;
    }

    public static function getPedidoWithProdutos($id) {
        $connection = DatabaseRepository::connect();

        $sql = "SELECT Pedido.*, Produto.id as produto_id, Produto.nome as produto_nome, Produto.descricao as produto_descricao, Produto.preco as produto_preco 
                    FROM Pedido 
                    LEFT JOIN Produto_Pedido ON Pedido.id = Produto_Pedido.pedido_id 
                    LEFT JOIN Produto ON Produto_Pedido.produto_id = Produto.id
                    WHERE Pedido.id = $id";
        
        $result = $connection->query($sql);

        $pedido = null;
        $produtos = [];

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                // Cria um objeto do tipo pedido caso ele não exista ainda
                if($pedido === null) {
                    $pedido = new Pedido($row['id'], $row['data_pedido'], $row['produto_preco']);
                }

                $produto = new Produto($row['produto_id'], $row['produto_nome'], $row['produto_descricao'], $row['produto_preco']);
                $produtos[] = $produto;
            }

            $pedido->setProdutos($produtos);
        }

        $connection->close();
        return $pedido;
    }

    public static function getPedidoById($id) {
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM pedido WHERE id = $id");

        $pedido = null;
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $pedido = new Pedido($row['id'], $row['data_pedido'], $row['status']);            
        }
        return $pedido;
    }

    public static function insertPedido(Pedido $pedido) {        
        $connection = DatabaseRepository::connect();

        $data_pedido = $pedido->getDataPedido();
        $status = $pedido->getStatus();

        $sql = "INSERT INTO pedido (data_pedido, status) VALUES ('$data_pedido', '$status')";
        $success = $connection->query($sql);
        $connection->close();
        return $success;
    }

    public static function updatePedido(Pedido $pedido, $id) {
        $connection = DatabaseRepository::connect();       
        $data_pedido = $pedido->getDataPedido();
        $status = $pedido->getStatus();

        $sql = "UPDATE pedido SET data_pedido = '$data_pedido', status = '$status' WHERE id = $id";
        $success = $connection->query($sql);
        $connection->close();
        return $success;
    }

    public static function deletePedido($id) {
        $connection = DatabaseRepository::connect();
        $sql = "DELETE FROM pedido WHERE id = $id";
        $success = $connection->query($sql);
        $connection->close();
        return $success;
    }
}
?>