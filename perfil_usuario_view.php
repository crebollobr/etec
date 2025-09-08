<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Perfil do Usuário</title>
    <style> body { font-family: sans-serif; } </style>
</head>
<body>
    <?php if (isset($usuario)): ?>
        <h1>Perfil de <?php echo htmlspecialchars($usuario['nome']); ?></h1>
        <p><strong>Nome:</strong> <?php echo htmlspecialchars($usuario['nome']); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($usuario['email']); ?></p>
    <?php else: ?>
        <h1>Usuário não encontrado!</h1>
    <?php endif; ?>
</body>
</html>
