<?php

// Configurações de conexão com o banco de dados
define('DB_HOST', 'localhost');
define('DB_NAME', 'nome_do_banco');
define('DB_USER', 'usuario');
define('DB_PASSWORD', 'senha');

// Outras configurações globais
define('DEBUG_MODE', true); // Ativar/desativar modo de depuração
define('SITE_URL', 'http://seusite.com'); // URL base do seu site

// Configurações de outras APIs, chaves de acesso, etc.
define('API_KEY', 'sua_chave_de_api');

// Configurações de CORS (Cross-Origin Resource Sharing), se necessário
// Isso permite que sua API seja acessada por outros domínios
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type, Authorization');
