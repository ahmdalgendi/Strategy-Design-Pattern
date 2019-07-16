<?php
require 'interface/FlyBehavior.php';

class DontFly  implements FlyBehavior
{
    public function fly()
    {
        echo "I can't fly";
    }
}
