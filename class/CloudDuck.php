<?php
require_once 'Duck.php';
require_once 'strategy\QuackNormaly.php';
require_once 'strategy\FlyWithWings.php';

class CloudDuck extends Duck 
{
    function __construct(){
        $this->quackBehavior = new QuackNormaly;

        $this->flyBehavior = new FlyWithWings;

    }
    public function display()
    {
        echo 'I am a cloud duck<br>';
    }
}
