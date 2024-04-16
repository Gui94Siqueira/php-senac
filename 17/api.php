<?php
    require_once 'DatabaseRepository.php';

    // echo DatabaseRepository::getServerValues();
    // print_r(DatabaseRepository::getAllContacts());
    // print_r(DatabaseRepository::getContactById(4));
    // echo DatabaseRepository::insertContact("Guilherme", "11 506055050", "guilherme@mailcom");
    // echo DatabaseRepository::updateContact(2, "Pessa B", "11 99755555", "pessoa_b@mail.com");

    $action = $_GET['action'];
    switch($action) {
        case 'list':
            echo json_encode(DatabaseRepository::getAllContacts());
            break;
        case 'add':
            $data = json_decode(file_get_contents('php://input', true));
            $success = DatabaseRepository::insertContact($data->nome, $data->telefone, $data->email);
            echo json_encode(['success' => $success]);
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
            echo json_encode(['error' => 'ação inválida']);
    }
?>