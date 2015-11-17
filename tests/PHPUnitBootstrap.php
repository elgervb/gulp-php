<?php
function loader($class)
{
    $file = $class . '.php';
    if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . '../src'. DIRECTORY_SEPARATOR . $file)) {
        require_once __DIR__ . DIRECTORY_SEPARATOR . '../src'. DIRECTORY_SEPARATOR . $file;
    }else if(realpath(__DIR__ . DIRECTORY_SEPARATOR . '../test'. DIRECTORY_SEPARATOR . $file)){
      require_once realpath(__DIR__ . DIRECTORY_SEPARATOR . '../test'. DIRECTORY_SEPARATOR . $file);
    }
}
spl_autoload_register('loader');

include 'vendor/autoload.php';