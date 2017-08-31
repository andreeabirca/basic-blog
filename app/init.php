<?php

ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', __DIR__);
define('BASE_URL', 'http://localhost/Test2');
define('ADMIN_ROOT', 'http://localhost');

define('DATABASE_HOST', 'localhost');
define('DATABASE_NAME', 'blog');
define('DATABASE_USER', 'root');
define('DATABASE_PASSWORD', '');


define('DS', DIRECTORY_SEPARATOR);

define('SITE_ROOT', dirname(dirname(__FILE__)).DS);

define('INCLUDE_PATH', SITE_ROOT.'app'.DS);
	define('MODEL_PATH', INCLUDE_PATH.'models'.DS);
	define('DB_PATH', INCLUDE_PATH.'database'.DS);
	define('VIEW_PATH', INCLUDE_PATH.'views'.DS);


require_once(MODEL_PATH.'Post.php');
require_once(DB_PATH.'db.php');
