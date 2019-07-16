<?php
require_once 'Duck.php';
require_once 'strategy\Quack.php';
require_once 'strategy\FlyWithWings.php';
class CloudDuck extends Duck 
{
    function __construct(){
        $this->flyBehavior = new FlyWithWings;
        $this->quackBehavior = new Quack;
    }
    public function display()
    {
        echo 'I am a cloud duck';
    }
}
