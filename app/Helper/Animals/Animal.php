<?php

namespace app\Helper\Animals;
use app\Helper\Fruits;

class Animal extends Fruits
{
    public  $fruitName;
    private  $myName;
   
    public function __construct(){
        $this->fruitName = parent::mango();
    }

    public function setName($myName)
    {
        $this->myName = $myName;
        return $this;
    }
    public function info()
    {   
        echo "Your name is {$this->myName}";
        return $this;
    }
}
