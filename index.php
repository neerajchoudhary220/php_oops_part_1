<?php
// require_once('app/Helper/Fruits.php');

use app\Helper\Animals\Animal;
use app\Test\C;

require_once './vendor/autoload.php';

try {
    // $animal = new Animal();
    // $animal->setName("Neeraj");
    // echo "<br/>";
    // echo "Hello {$animal->name}";
    // $animal->info();

    $c = new C();
    echo $c->neeraj;
} catch (\Throwable $e) {
    echo $e;
}
