<?php
    require_once 'database/PedidoRepository.php';
    require_once 'database/DatabaseRepository.php';

    class PedidoController {
        public static function handleRequest($action) {
            switch ($action) {
                case 'listar':
                    self::listarPedidos();
                    break;
                
                case 'buscar':
                    self::buscarpedidoPorId();
                    break;

                case 'cadastrar':
                    self::cadastrarPedido();
                    break;
                
                case 'atualizar':
                    self::atualizarPedido();
                    break;

                case 'excluir':
                    self::deletarPedido();
                    break;

                default:
                    http_response_code(400); // Requisição inválida
                    echo json_encode(['error' => 'Ação inválida']);
                    break;
            }
        }

        public static function listarPedidos() {
            $pedidos = PedidoRepository::getAllPedidos();
            echo json_encode($pedidos);
        }

        public static function buscarpedidoPorId() {
            if($_SERVER['REQUEST_METHOD'] === 'GET') {
                $id = $_GET['id'];
                $pedido = PedidoRepository::getPedidoById($id);
                if ($pedido) {
                    echo json_encode($pedido);
                } else {
                    http_response_code(404);
                    echo json_encode(['error' => 'Ação inválida']);
                }
            } else {
                http_response_code(405);
            }
        }

        public static function cadastrarPedido() {
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                $data = json_decode(file_get_contents("php://input"));
                $pedido = new Pedido(null, $data->data_pedido, $data->status);

                $success = PedidoRepository::insertPedido($pedido);
                echo json_encode(['success' => $success]);
            } else {
                http_response_code(405);
                echo json_encode(['error' => 'Ação inválida']);
            } 
        } 
        
        public static function atualizarPedido() {
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                $data = json_decode(file_get_contents("php://input"));
                $id = $data->id;
                $status = $data->status;
                $data_pedido = $data->data_pedido;
    
                // Existindo um pedido!
                $pedidoExistente = PedidoRepository::getPedidoById($id);
                if($pedidoExistente) {
                    //update das propriedades do pedido
                    $pedidoExistente->setStatus($status);
                    $pedidoExistente->setData($data_pedido);
    
                    $success = PedidoRepository::updatePedido($pedidoExistente, $id);
                    echo json_encode(['success' => $success]);
                } else {
                    http_response_code(404);
                    echo json_encode(['error' => 'Pedido não encontrado']);
                }
            } else {
                http_response_code(405);
            }        
        }

        public static function deletarPedido() {
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                $data = json_decode(file_get_contents("php://input"));
                $id = $data->id;

                $success = PedidoRepository::deletePedido($id);
                echo json_encode(['success' => $success]);
            } else {
                http_response_code(405);
                echo json_encode(['error' => 'Ação inválida']);
            }
        }
    }

?>