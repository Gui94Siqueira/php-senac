<?php
require_once 'DatabaseRepository.php';

$action = $_GET['escolha'];

switch($action) {
    case 'list':
        echo json_encode(DatabaseRepository::getAllContacts());
        break;
    case 'get':
        $id = $_GET['id'];
        echo json_encode(DatabaseRepository::getContactById($id));
        break;
    case 'getNome':
        $nome = $_GET['nome'];
        echo json_encode(DatabaseRepository::getContactByName($nome));
        break;
    case 'add':
        $data = json_decode(file_get_contents('php://input', true));
        $success = DatabaseRepository::insertContact($data->nome, $data->telefone, $data->email);
        echo json_encode(['scuccess' => $success]);
        break;
    case 'update':
        $data = json_decode(file_get_contents('php://input', true));
        $success = DatabaseRepository::updateContact($data->id, $data->nome, $data->telefone, $data->email);
        echo json_encode(['success' => $success]);
        break;
    case 'delete':
        $id = $_GET['id'];
        $success = DatabaseRepository::deleteContact($id);
        echo json_encode(['success' => $success]);
        break;
    default:
        echo json_encode(['error' => 'Ação inválida']);
}

?>