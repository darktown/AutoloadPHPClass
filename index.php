<?php
/**
 * Created by PhpStorm.
 * User: renepirzkall
 * Date: 06.05.16
 * Time: 13:30
 */

//use autoload\core\DirName;


require_once 'config/bootstrap.php';

$dir = new \autoload\core\DirName();
$dir->dir();
echo $dir->dir;