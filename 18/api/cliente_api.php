<?php
    require_once '../database/ClienteRepository.php';
    
    $action = $_GET['action'];

    switch($action) {
        case 'list':
            listarClientes();
            break;
        case 'buscar':
            buscarClientePorId();
            break;
        case 'cadastrar':
            cadastrasCliente();
            break;
        case 'atualizar':
            atualizarCliente();
            break;
        case 'excluir':
            excluirCliente();
            break;
        default:
        http_response_code(400); // Requisição Inválida
        echo json_encode(['error' => 'Ação inválida']);
    }

    function listarClientes() {
        $cliente = ClienteRepository::getAllClietes():
        echo json_encode($cliente);
    }

    function buscarClientePorId($id) {
        $cliente = ClienteRepository::getClienteById($id);
        echo json_encode($cliente);
    }

    function cadastrasCliente() {

    }

    function inserirCliente() {

    }

    function atualizarCliente() {

    }

    function excluirCliente($id) {

    }

    // CREATE Read update delete
    // Create = POST(INSERT)
    // Read = GET(SELECT)
    // UPDATE = 
    // DELETE = 

?>