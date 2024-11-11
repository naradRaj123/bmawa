<?php

    // Autoload function
function my_autoload($class_name) {
    $file_name = __DIR__ . '/' . str_replace('\\', '/', $class_name) . '.php';
    if (file_exists($file_name)) {
        require_once $file_name;
    }
}

// Register autoload function
spl_autoload_register('my_autoload');

?>