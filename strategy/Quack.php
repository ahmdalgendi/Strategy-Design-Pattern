<?php


class Quack  implements QuackBehavior{
    public function quack()
    {
        echo 'someone called me<br>';
        echo 'quack quack !!<br>';
    }    
}
