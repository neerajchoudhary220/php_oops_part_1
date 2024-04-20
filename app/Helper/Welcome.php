<?php
namespace app\Helper;

use app\Helper\Animals\Animal;

class Welcome extends Animal{

    // public function __destruct()
    // {
    //     echo "Welcome to the php oops";
    // }

    public static function message(){
         echo  "Hello how are you this is testing message";
    }

    protected function my(){
        return "Hello world 123";
    }
}