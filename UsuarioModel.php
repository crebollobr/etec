<?php
// models/UsuarioModel.php

class UsuarioModel {
    /**
     * Busca um usuário pelo seu ID (simulação de DB).
     * @param int $id
     * @return array|null
     */
    public function buscarPorId(int $id): ?array {
        // Simulação: Em um caso real, aqui haveria uma consulta SQL.
        $usuarios = [
            1 => ['nome' => 'Alice Silva', 'email' => 'alice@email.com'],
            2 => ['nome' => 'Beto Costa', 'email' => 'beto@email.com'],
        ];

        return $usuarios[$id] ?? null;
    }
}
