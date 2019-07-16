<?php
require 'interface/FlyBehavior.php';

class FlyWithWings  implements FlyBehavior
{
    public function fly()
    {
        echo "I have wings";
    }
}
