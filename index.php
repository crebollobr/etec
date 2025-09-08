<?php
// index.php

// Roteador super simples
$controllerName = $_GET['controller'] ?? 'home'; // Ex: 'usuario'
$actionName = $_GET['action'] ?? 'index';       // Ex: 'ver'

// Constrói o nome da classe do controller
// ucfirst -> primeira letra maiúscula: usuario -> Usuario
$controllerClassName = ucfirst($controllerName) . 'Controller';

// Inclui o arquivo do controller
$controllerFile = 'controllers/' . $controllerClassName . '.php';

if (file_exists($controllerFile)) {
    require_once $controllerFile;

    // Cria o objeto e chama a ação (método)
    $controller = new $controllerClassName();
    if (method_exists($controller, $actionName)) {
        $controller->$actionName();
    } else {
        echo "Ação não encontrada!";
    }
} else {
    echo "Controlador não encontrado!";
}
