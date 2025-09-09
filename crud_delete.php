<?php
require 'conexao.php';

// ID do produto a ser excluído
$id_produto_excluir = 2;

// SQL para deletar
$sql = "DELETE FROM produtos WHERE id = ?";
$stmt = mysqli_prepare($conexao, $sql);

// Vincular parâmetro (i = integer)
mysqli_stmt_bind_param($stmt, "i", $id_produto_excluir);

// Executar
if (mysqli_stmt_execute($stmt)) {
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "Produto excluído com sucesso!";
    } else {
        echo "Nenhum produto encontrado com o ID " . $id_produto_excluir;
    }
} else {
    echo "Erro ao excluir produto: " . mysqli_error($conexao);
}

mysqli_stmt_close($stmt);
mysqli_close($conexao);
?>
