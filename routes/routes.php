<?php

// Autoload de classes
spl_autoload_register(function ($className) {
    require_once __DIR__ . '/../app/controllers/' . $className . '.php';
});

// Classe para manipulação de rotas
class Router
{
    public static function route($route)
    {
        $route = rtrim($route, '/');

        switch ($route) {
            case 'execucao':
            case '':
                ExecucaoController::index();
                break;
            default:
                self::notFound();
                break;
        }
    }

    private static function notFound()
    {
        echo 'Página não encontrada';
    }
}

// Obtém a rota solicitada
$route = isset($_GET['url']) ? $_GET['url'] : '';

// Roteia a rota para o controlador apropriado
Router::route($route);
