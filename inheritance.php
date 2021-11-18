<?php

class Shape{
    protected $length = 4;

    function getArea(){
        return pow($this->length, 2);
    }
}

class Square extends Shape {

}


class Triangle extends Shape {

    protected $base = 4;
    protected $height = 7;

    function getArea()
    {
        return 0.5 * $this->base * $this->height;
    }
}

echo (new Square)->getArea().PHP_EOL;
echo (new Triangle)->getArea().PHP_EOL;