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
        $cliente = ClienteRepository::getAllClientes();
        echo json_encode($cliente);
    }

    function buscarClientePorId() {
        if($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $cliente = ClienteRepository::getClienteById($id);

            if($cliente) {
                echo json_encode($cliente);
            } else {
                http_response_code(404); // Cliente não encontrado
                echo json_encode(['error' => 'Cliente Não Encontrado']);
            }
        } else {
            http_response_code(405); // Método não permitido
        }
        
    }

    function cadastrasCliente() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = json_decode(file_get_contents("php://input"));
            $nome = $data->nome;
            $cpf = $data->cpf;

            $success = ClienteRepository::inserirCliente($nome, $cpf);
            echo json_encode(['success' => $success]);
        } else {
            http_response_code(405);
        }
    }

    function atualizarCliente() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = json_decode(file_get_contents("php://input"));
            $id = $data->id;
            $nome = $data->nome;
            $cpf = $data->cpf;

            $success = ClienteRepository::updateCliente($id, $nome, $cpf);
            echo json_encode(['success' => $success]);
        } else {
            http_response_code(405);
        }
    }

    function excluirCliente() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = json_decode(file_get_contents("php://input"));
            $id = $data->id;

            $success = ClienteRepository::deleteCliente($id);
            echo json_encode(['success' => $success]);
        } else {
            http_response_code(405);
        }
    }

    // Create Read update delete
    // Create = POST(INSERT)
    // Read = GET(SELECT)
    // UPDATE = POST(UPDATE)
    // DELETE = POST(DELETE)

?>