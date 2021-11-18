<?php

use Duck\{DuckClass,DuckFlyInterface};

require "duck/DuckClass.php";
require "duck/DuckFlyInterface.php";

class RealDuck extends DuckClass implements DuckFlyInterface {

    function fly()
    {
        return "Duck can fly";
    }
}

$rubberDuck = new RealDuck();
echo $rubberDuck->fly().PHP_EOL;
echo $rubberDuck->display().PHP_EOL;
//echo $rubberDuck->quack().PHP_EOL;