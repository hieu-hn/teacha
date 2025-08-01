<?php
// HTTP
define('HTTP_SERVER', 'http://localhost/teacha/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/teacha/');

// DIR
define('DIR_APPLICATION', '/Applications/AMPPS/www/teacha/catalog/');
define('DIR_SYSTEM', '/Applications/AMPPS/www/teacha/system/');
define('DIR_IMAGE', '/Applications/AMPPS/www/teacha/image/');
define('DIR_STORAGE', '/Applications/AMPPS/storage/');
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
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'teacha');
define('DB_PASSWORD', 'P6U67jenrs');
define('DB_DATABASE', 'teacha');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');