<?php
require '../interface/FlyBehavior.php';

require '../interface/QuckBehavior.php';
abstract class Duck{
    protected $flyBehavior = new FlyBehavior;
    protected $quackBehavior = new QuackBehavior;
    public abstract function display();
    public function quack(){
        $quackBehavior.quack();
    }
    
    public function fly(){
        $flyBehavior.fly();
    }
    

}
