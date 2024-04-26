<?php
    require_once 'controller/PedidoController.php';
    require_once 'controller/ProdutoController.php';

    $entity = $_GET['entity'];
    $action = $_GET['action'];

    switch($entity) {
        case 'pedido':
            PedidoController::handleRequest($action);
            break;
        
        case 'produto':
            ProdutoController::handleRequest($action);
            break;

        default:
            http_response_code(400);
            echo json_encode(['error' => 'Entidade inválida!']);
            break;
    }
?>