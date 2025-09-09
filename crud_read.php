<?php
require 'conexao.php';

echo "<h1>Lista de Produtos</h1>";

$sql = "SELECT id, nome, preco FROM produtos";
$resultado = mysqli_query($conexao, $sql);

// Verifica se há registros
if (mysqli_num_rows($resultado) > 0) {
    // Exibe os dados de cada linha
    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "ID: " . $linha["id"] . "<br>";
        echo "Nome: " . $linha["nome"] . "<br>";
        echo "Preço: R$ " . number_format($linha["preco"], 2, ',', '.') . "<br>";
        echo "<hr>";
    }
} else {
    echo "Nenhum produto encontrado.";
}

mysqli_close($conexao);
?>
