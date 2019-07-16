<?php
require 'interface/QuackBehavior.php';
class Quack  implements QuackBehavior{
    public function quack()
    {
        echo 'quack quack !!';
    }    
}
