<?php
require 'interface/QuackBehavior.php';
class SQuack  implements QuackBehavior{
    public function quack()
    {
        echo 'SsSsSSs quack quack !!';
    }    
}
