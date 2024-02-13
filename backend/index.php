<?php

// Autoload das classes do Composer
require 'vendor/autoload.php';

// Função de autoloading
// spl_autoload_register(function ($className) {
//     // Verifica se o namespace começa com 'App\\'
//     $prefix = 'App\\';
//     $baseDir = __DIR__ . '/app/';

//     // Verifica se a classe pertence ao namespace 'App\\'
//     $len = strlen($prefix);

//     if (strncmp($prefix, $className, $len) !== 0) {
//         // Se não pertencer, sai da função
//         return;
//     }
//     // Obtém o nome relativo da classe
//     $relativeClass = substr($className, $len);

//     // Converte o namespace em um caminho de arquivo
//     $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

//     // Verifica se o arquivo existe
//     if (file_exists($file)) {
//         require $file;
//     }
// });


// Carrega o arquivo de configuração
require 'config.php';
require_once 'Router.php';

// Roteamento das solicitações
$router = new Router();
$router->route($_SERVER['REQUEST_URI']);