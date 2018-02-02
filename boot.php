<?php
define("APP_DIR", __DIR__);
function classLoader($className) {
    $aPath = explode("\\", $className);
    $classFile = array_pop($aPath) . ".php";
    $classDir = APP_DIR . DIRECTORY_SEPARATOR . "app". DIRECTORY_SEPARATOR
        . strtolower(implode(DIRECTORY_SEPARATOR, $aPath)) . DIRECTORY_SEPARATOR;
    $path2File = $classDir . $classFile;
    if(file_exists($path2File)) {
        include $path2File;
    }
}
spl_autoload_register('classLoader');