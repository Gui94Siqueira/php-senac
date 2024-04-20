<?php
    require_once '../database/ContaRepository.php';

    $action = $_GET['action'];
    
    switch($action) {
        case 'list':
            listarContas();
            break;
        case 'buscar':
            buscarContaPorId();
            break;
        case 'cadastrar':
            cadastrarConta();
            break;
        case 'atualizar':
            break;
        case 'excluir':
            break;
        default:
        http_response_code(400);
        echo json_encode(['Error' => 'Ação inválida']);
    }

    function listarContas() {
        $contas = ContaRepository::getAllContas();
        echo json_encode($contas);
    }

    function buscarContaPorId() {

    }

    function cadastrarConta() {

    }

    function atualizarConta() {

    }

    function excluirConta() {

    }
    
?>