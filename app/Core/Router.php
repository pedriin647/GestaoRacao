<?php

/// app/Core/Router.php
namespace Pedriin647\RadicalErp\Core;

class Router
{
    public function route($url)
    {
        $segments = explode('/', trim($url, '/'));
        $controllerName = $segments[0] ?? null;
        $methodName = $segments[1] ?? null;

        // Se a rota for um controller e um método (requisição AJAX)
        if ($controllerName && $methodName) {
            $controllerClass = "\\Pedriin647\\RadicalErp\\Controllers\\" . ucfirst($controllerName);

            if (class_exists($controllerClass)) {
                $controller = new $controllerClass();
                
                if (method_exists($controller, $methodName)) {
                    header('Content-Type: application/json');
                    echo json_encode($controller->$methodName());
                    return;
                }
            }
            http_response_code(404);
            echo json_encode(['error' => 'Método não encontrado']);
            return;
        }

        // Carrega a view correspondente
        $viewFile = "../app/Views/{$controllerName}.view.php";
        if (file_exists($viewFile)) {
            require $viewFile;
        } else {
            http_response_code(404);
            echo "Página não encontrada";
        }
    }
}
