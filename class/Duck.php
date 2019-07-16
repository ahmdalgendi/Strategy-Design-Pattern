<?php

require_once 'interface/QuckBehavior.php';
require_once 'interface/FlyBehavior.php';

abstract class Duck{

    
    function __construct(){
        $this->flyBehavior = new FlyBehavior;
        $this->quackBehavior = new QuackBehavior;
    }
    public abstract function display();
    public function quack(){
        $this->quackBehavior.quack();
    }
    
    public function fly(){
        $this->flyBehavior.fly();
    }
    

}
