<?php
    require_once 'database/ProdutoRepository.php';

    class ProdutoController {
        public static function handleRequest($action) {
            switch($action) {
                case 'listar':
                    self::listarProdutos();
                    break;
                
                case 'buscar':
                    self::buscarProdutoPorId();
                    break;

                case 'cadastrar':
                    self::inserirProduto();
                    break;

                case 'atualizar':
                    self::atualizarProduto();
                    break;

                case 'excluir':
                    self::deletarProduto();
                    break;

                default:
                    http_response_code(400);
                    echo json_encode(['error' => 'Ação inválida']);
                    break;
            }
        }

        public static function listarProdutos() {
            $produtos = ProdutoRepository::getAllProdutos();
            echo json_encode($produtos);
        }

        public static function buscarProdutoPorId() {
            if($_SERVER['REQUEST_METHOD'] === 'GET') {
                $id = $_GET['id'];
                $produto = ProdutoRepository::getProdutoById($id);
                if($produto) {
                    echo json_encode($produto);
                } else {
                    http_response_code(404);
                    echo json_encode(['error' => 'Produto não encontrado']);
                }
                
            }

            http_response_code(405);
        }

        public static function inserirProduto() {
            if($_SERVER["REQUEST_METHOD"] === 'POST') {
                $data = json_decode(file_get_contents("php://input"));
                $produto = new Produto(null, $data->nome, $data->descricao, $data->preco);

                $success = ProdutoRepository::insertProduct($produto);
                echo json_encode(['success' => $success]);
            } else {
                http_response_code(405);
                echo json_encode(['error' => "Ação inválida!"]);
            }

        }

        public static function atualizarProduto() {
            if($_SERVER["REQUEST_METHOD"] === 'POST') {
                $data = json_decode(file_get_contents("php://input"));
                $produto = new Produto($data->id, $data->nome, $data->descricao, $data->preco);
                
                $success = ProdutoRepository::updateProduct($produto);
                echo json_encode(['success' => $success]);
            } else {
                http_response_code(405);
                echo json_encode(['error' => "Ação inválida!"]);
            }
        }

        public static function deletarProduto() {
            if($_SERVER["REQUEST_METHOD"] === 'POST') {
                $data = json_decode(file_get_contents("php://input"));
                $id = $data->id;
                $success = ProdutoRepository::deleteproduct($id);
                echo json_encode(['success' => $success]);
            } else {
                http_response_code(405);
                echo json_encode(['error' => "Ação inválida!"]);
            }

            
        }
    }
?>