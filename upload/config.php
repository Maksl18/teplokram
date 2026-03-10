<?php
// Connected to .env file
$env_file = dirname(__DIR__) . '/.env';
if (file_exists($env_file)) {
    $env_lines = file($env_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($env_lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        if (strpos($line, '=') !== false) {
            list($key, $value) = explode('=', $line, 2);
            $_ENV[trim($key)] = trim($value);
        }
    }
}

// HTTP
define('HTTP_SERVER', $_ENV['OPENCART_HTTP_SERVER']);

// HTTPS
define('HTTPS_SERVER', $_ENV['OPENCART_HTTPS_SERVER']);

// DIR
define('DIR_APPLICATION', '/var/www/html/upload/catalog/');
define('DIR_SYSTEM', '/var/www/html/upload/system/');
define('DIR_IMAGE', '/var/www/html/upload/image/');
define('DIR_STORAGE', '/var/www/html/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', $_ENV['OPENCART_DB_DRIVER']);
define('DB_HOSTNAME', $_ENV['OPENCART_DB_HOSTNAME']);
define('DB_USERNAME', $_ENV['OPENCART_DB_USERNAME']);
define('DB_PASSWORD', $_ENV['OPENCART_DB_PASSWORD']);
define('DB_DATABASE', $_ENV['OPENCART_DB_DATABASE']);
define('DB_PORT', $_ENV['OPENCART_DB_PORT']);
define('DB_PREFIX', $_ENV['OPENCART_DB_PREFIX']);
