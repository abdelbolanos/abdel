<?php
use Roedor\Murcielago\MurcielagoClass as MurcielagoClass;
use Roedor\Raton\RatonClass as RatonClass;

spl_autoload_register(function ($class) {
    $file_path = str_replace("\\", '/', $class) . '.php';
    echo "Include: " . $file_path . PHP_EOL; 
    include $file_path;
});

$murcielago = new MurcielagoClass();
print $murcielago->correr();
print PHP_EOL;
print $murcielago->puedeVolar();
print PHP_EOL;
print $murcielago->getGenero();

print PHP_EOL;
print PHP_EOL;

$raton = new RatonClass();
print $raton->correr();
print PHP_EOL;
print $raton->puedeVolar();
print PHP_EOL;
print $raton->getGenero();
