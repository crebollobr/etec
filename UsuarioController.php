<?php
// controllers/UsuarioController.php

require_once 'models/UsuarioModel.php';

class UsuarioController {
    public function ver() {
        // 1. Pega o ID da requisição
        $id = $_GET['id'] ?? 0;

        // 2. Pede os dados ao Model
        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->buscarPorId((int)$id);

        // 3. Carrega a View, passando os dados para ela
        // A variável $usuario estará disponível dentro do arquivo da view.
        require 'views/perfil_usuario_view.php';
    }
}
