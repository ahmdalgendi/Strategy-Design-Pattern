<?php

require_once 'interface/QuckBehavior.php';
require_once 'interface/FlyBehavior.php';

abstract class Duck{

    function __construct(){
        $this->quackBehavior = new QuackBehavior;
        $this->flyBehavior = new FlyBehavior;
        
    }
    public abstract function display();
    public function fly(){
        $this->flyBehavior->fly();
    }
    public function quack(){

        $this->quackBehavior->quack();
    }
    
    
    

}
