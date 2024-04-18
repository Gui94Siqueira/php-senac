<?php
    require_once '../database/ClienteRepository.php';
    
    $action = $_GET['action'];

    switch($action) {
        case 'list':
            listarClientes();
            break;
        default:
        http_response_code(400); // Requisição Inválida
        echo json_encode(['error' => 'Ação inválida']);
    }

    function listarClientes() {
        $cliente = ClienteRepository::getAllClietes():
        echo json_encode($cliente);
    }
?>