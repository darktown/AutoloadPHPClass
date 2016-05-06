<?php

namespace autoload\core;

/**
 * Class DirName
 * @package autoload\core
 * Define the Rootpath and insert in the AutoLoader Class at the Bootstrap.php
 * The source Folder must declared at the SourceFolder.
 * The SourceFolder is autoload.
 * 
 */
class DirName
{
    public $dir;

    public function dir()
    {
        $dirPath = ROOT_PATH;
        
        $array = explode(DIRECTORY_SEPARATOR, $dirPath);

        $result = count($array);
        $erg = $array[$result-2];

        $this->dir = $erg;
    }
}