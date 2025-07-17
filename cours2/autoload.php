<?php
spl_autoload_register(function ($classname) {
    // App\Model\Dog
    // src/Model/Dog.php
    // On remplace le App par src
    $path = str_replace("App", "src", $classname);
    // On convertit les antislash en slash
    $path = str_replace("\\", "/", $path);
    // On rajoute l'extension
    require_once $path . ".php";
});
