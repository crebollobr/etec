<?php
// 1. Conexão com o banco de dados
$conexao = new PDO("mysql:host=localhost;dbname=meudb", "user", "pass");

// 2. Lógica para pegar um dado da URL
$usuario_id = $_GET['id'];

// 3. Consulta SQL no meio do código
$stmt = $conexao->prepare("SELECT nome, email FROM usuarios WHERE id = ?");
$stmt->execute([$usuario_id]);
$usuario = $stmt->fetch();

// 4. HTML misturado com PHP para exibir os dados
?>
<!DOCTYPE html>
<html>
<head>
    <title>Perfil do Usuário</title>
</head>
<body>
    <h1>Detalhes do Usuário</h1>
    <?php if ($usuario): ?>
        <p><strong>Nome:</strong> <?php echo $usuario['nome']; ?></p>
        <p><strong>Email:</strong> <?php echo $usuario['email']; ?></p>
    <?php else: ?>
        <p>Usuário não encontrado!</p>
    <?php endif; ?>
</body>
</html>
