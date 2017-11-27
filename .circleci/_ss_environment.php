<?php
define('SS_DATABASE_CLASS', 'MySQLDatabase');
define('SS_DATABASE_SERVER', '127.0.0.1');
define('SS_DATABASE_USERNAME', 'root');
define('SS_DATABASE_PASSWORD', 'ubuntu');
define('SS_DATABASE_NAME', 'circle_test');
define('SS_ENVIRONMENT_TYPE', 'dev');
global $_FILE_TO_URL_MAPPING;
$_FILE_TO_URL_MAPPING['/root/var/www'] = 'http://localhost';
