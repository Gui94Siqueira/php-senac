<?php
    // Definindo constantes para a conexão com o banco de dados
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'usuario_contatos');
    define('DB_PASSWORD', 'Senha@123');
    define('DB_NAME', 'contatos');


    // Criar uma nova conexão com o banco de dados
    $connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    // verificando se ocorreu algum erro de conexão
    if($connection->connect_error) {
        die("Erro de conexão: " . $connection->connect_error);
    }

    // Criação dos dados para inserção
    $nome = "Walther Souza Q&A";
    $telefone = "11 9999954321";
    $email = "walther_carnaval_2017@mail.com";
    $id = 1;

    // Query para atualiza contado (Utilizando consulta preparada)
    $meu_update = "UPDATE contatos_info SET nome = ?, telefone = ?, email = ? WHERE Id = ?";

    $stmt = $connection->prepare($meu_update);

    // Verefica se a consulta preparada foi bemm sucedida
    if($stmt){
        // Associa os parametros á consulta preparada
        $stmt->bind_param("sssi", $nome, $telefone, $email, $id);

        // Executa a consulta
        if($stmt->execute()) {
            echo "Contato atulizado com sucesso";
        } else {
            echo "Erro ao atualizar o contato: " . $stmt->error;
        }

        // Fecha a consulta preparada
        $stmt->close();
    } else {
        echo "Erro na consulta preparada: " . $connection->error;
    }

?>
