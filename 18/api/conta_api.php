<?php
    require_once '../database/ContaRepository.php';

    $action = $_GET['action'];
    
    switch($action) {
        case 'list':
            listarContas();
            break;
        default:
        http_response_code(400);
        echo json_encode(['Error' => 'Ação inválida']);
    }

    function listarContas() {
        $contas = ContaRepository::getAllContas();
        echo json_encode($contas);
    }
    
?>