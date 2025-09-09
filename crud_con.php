<?php
// Parâmetros de conexão
$servidor = "localhost";
$usuario = "root";
$senha = ""; // Deixe em branco se não houver senha
$banco = "meu_banco_de_dados";

// Criar a conexão
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Checar a conexão
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Opcional: Definir o charset para evitar problemas com acentuação
mysqli_set_charset($conexao, "utf8");

// Se chegamos até aqui, a conexão foi um sucesso!
// echo "Conexão bem-sucedida!";
?>
