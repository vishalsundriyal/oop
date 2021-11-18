<?php

namespace Duck;

class RubberDuck extends DuckClass{
    use DuckTrait;

    function swim()
    {
        echo "Duck can swim";
    }
}

$rubberDuck = new RubberDuck();
echo $rubberDuck->display().PHP_EOL;
echo $rubberDuck->swim().PHP_EOL;