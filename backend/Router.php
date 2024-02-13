<?php
// Router.php

class Router {
    public function route($url) {
        // Remove a query string, se houver
        $url = strtok($url, '?');
        
        // Divide a URL em partes
        $urlParts = explode('/', trim($url, '/'));

        // Define o namespace base
        $namespace = 'App\Controllers\\';

        // Define o controlador e a ação padrão
        $controllerName = isset($urlParts[1]) && $urlParts[1] ? ucfirst($urlParts[1]) . 'Controller' : 'HomeController';
        $actionName = isset($urlParts[2]) && $urlParts[2] ? $urlParts[2] : 'index';

        // Caminho completo do arquivo do controlador
        $controllerFile = "app/Controllers/{$controllerName}.php";

        // Verifica se o arquivo do controlador existe
        if (file_exists($controllerFile)) {
            // Inclui o arquivo do controlador
            require_once $controllerFile;

            // Verifica se a classe existe
            $controllerClass = $namespace . $controllerName;
            if (class_exists($controllerClass)) {
                // Instancia o controlador
                $controller = new $controllerClass();

                // Verifica se a ação existe no controlador
                if (method_exists($controller, $actionName)) {
                    // Remove o nome do controlador e da ação da lista de parâmetros
                    unset($urlParts[0], $urlParts[1]);

                    // Chama a ação do controlador, passando os parâmetros restantes da URL
                    call_user_func_array([$controller, $actionName], $urlParts);
                } else {
                    // Ação não encontrada
                    echo "404 - Página não encontrada";
                }
            } else {
                // Classe não encontrada
                echo "404 - Página não encontrada";
            }
        } else {
            // Controlador não encontrado
            echo "404 - Página não encontrada";
        }
    }
}
