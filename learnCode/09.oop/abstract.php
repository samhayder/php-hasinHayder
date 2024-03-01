<?php

abstract class Shape {
    abstract public function getArea();
    abstract public function getPerimeter();
}

class Rectangle extends Shape {
    protected $base, $height;

    public function __construct( $base, $height ) {
        $this->base = $base;
        $this->height = $height;
    }

    public function getBase() {
        echo "Base is: {$this->base}";
    }
    public function getHeight() {
        echo "Base is: {$this->height}";
    }

    public function getArea() {
        return $this->base * $this->height;
    }
    public function getPerimeter() {

    }
}

$rs = new Rectangle( 2, 3 );
echo $rs->getArea();
