<?php
    require_once 'database/PedidoRepository.php';

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
            if(){

            } else {
                
            }
        }

        public static function cadastrarPedido() {

        }

        public static function atualizarPedido() {

        }

        public static function deletarPedido() {

        }
    }

?>