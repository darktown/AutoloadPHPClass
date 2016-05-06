<?php
/**
 * Created by PhpStorm.
 * User: renepirzkall
 * Date: 06.05.16
 * Time: 13:25
 */


use autoload\core\Autoloader;
use autoload\core\DirName;

define( 'ROOT_PATH', dirname( dirname( __FILE__ ) ) . '/' );
//define( 'APP_PATH', ROOT_PATH . 'app/' );
define( 'CONFIG_PATH', ROOT_PATH . 'config/' );
define( 'CORE_PATH', ROOT_PATH . 'core/' );
//define( 'DB_PATH', ROOT_PATH . 'db/' );

require_once CORE_PATH . 'Autoloader.php';
require_once CORE_PATH . 'DirName.php';

$dir = new DirName();
$dir->dir();
$rootPath = $dir->dir;

$autoloader = new Autoloader($rootPath);
$autoloader->register();