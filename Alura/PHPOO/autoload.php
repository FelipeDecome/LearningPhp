<?php 

function load($namespace) {

    $namespace = str_replace("\\", "/", $namespace);
    $truePath = __DIR__ . "/" . $namespace . ".php";

    include_once $truePath;
}

spl_autoload_register(__NAMESPACE__ . "\load");

?>