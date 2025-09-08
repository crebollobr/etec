<?php
// Define que a resposta será em JSON e permite o acesso de qualquer origem (CORS)
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE"); // Permite os métodos
header("Access-Control-Allow-Headers: Content-Type");

// Simulação de banco de dados com um array
$users = [
    ["id" => 1, "nome" => "Carlos", "email" => "carlos@example.com"],
    ["id" => 2, "nome" => "Maria", "email" => "maria@example.com"]
];

// Pega o método HTTP da requisição (GET, POST, etc.)
$method = $_SERVER['REQUEST_METHOD'];

// Roteamento simples baseado no método HTTP
switch ($method) {
    case "GET":
        // Simplesmente retorna a lista de usuários em JSON
        echo json_encode($users);
        break;

    case "POST":
        // Pega os dados enviados no corpo da requisição e os decodifica de JSON para um array PHP
        $input = json_decode(file_get_contents("php://input"), true);
        
        // Simula a criação de um novo ID
        $input["id"] = count($users) + 1;
        
        // Adiciona o novo usuário ao nosso "banco de dados"
        $users[] = $input;

        http_response_code(201); // Define o código de status para "Created"
        echo json_encode(["message" => "Usuário criado com sucesso!", "user" => $input]);
        break;

    case "PUT":
        // Em um caso real, aqui você pegaria o ID e os dados para atualizar um usuário
        http_response_code(200);
        echo json_encode(["message" => "Recurso de atualização (PUT) chamado"]);
        break;

    case "DELETE":
        // Em um caso real, aqui você pegaria o ID para remover um usuário
        http_response_code(200);
        echo json_encode(["message" => "Recurso de remoção (DELETE) chamado"]);
        break;

    default:
        // Se o método não for um dos esperados, retorna um erro
        http_response_code(405); // Method Not Allowed
        echo json_encode(["message" => "Método não permitido"]);
        break;
}
?>
