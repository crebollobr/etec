<?php
// Inclui o arquivo de conexão
require 'conexao.php';

// Dados do novo produto
$nome_produto = "Teclado Mecânico";
$preco_produto = 250.75;

// Preparar a instrução SQL para evitar SQL Injection
$sql = "INSERT INTO produtos (nome, preco) VALUES (?, ?)";
$stmt = mysqli_prepare($conexao, $sql);

// Vincular os parâmetros (s = string, d = double)
mysqli_stmt_bind_param($stmt, "sd", $nome_produto, $preco_produto);

// Executar a instrução
if (mysqli_stmt_execute($stmt)) {
    echo "Novo produto inserido com sucesso!";
} else {
    echo "Erro ao inserir produto: " . mysqli_error($conexao);
}

// Fechar o statement e a conexão
mysqli_stmt_close($stmt);
mysqli_close($conexao);
?>
