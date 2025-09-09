<?php
require 'conexao.php';

// ID do produto a ser atualizado e novos dados
$id_produto = 1;
$novo_nome = "Teclado Mecânico RGB";
$novo_preco = 299.90;

// SQL para atualizar
$sql = "UPDATE produtos SET nome = ?, preco = ? WHERE id = ?";
$stmt = mysqli_prepare($conexao, $sql);

// Vincular parâmetros (s = string, d = double, i = integer)
mysqli_stmt_bind_param($stmt, "sdi", $novo_nome, $novo_preco, $id_produto);

// Executar
if (mysqli_stmt_execute($stmt)) {
    // Verifica se alguma linha foi realmente afetada
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "Produto atualizado com sucesso!";
    } else {
        echo "Nenhum produto encontrado com o ID fornecido ou os dados já eram os mesmos.";
    }
} else {
    echo "Erro ao atualizar produto: " . mysqli_error($conexao);
}

mysqli_stmt_close($stmt);
mysqli_close($conexao);
?>
