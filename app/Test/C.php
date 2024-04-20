<?php
namespace app\Test;

class C extends B{
    public static function My(){
        return "Hell this is my funciton";
    }

    public $neeraj;
    public function __construct()
    {
        $this->neeraj = parent::$my;
    }
}