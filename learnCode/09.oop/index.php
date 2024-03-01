<?php

// Create a class
class Foo {
    public $color;

    public function setColor( string $color ): void {
        $this->color = $color;
    }

    public function getColor() {
        echo "Color is: " . ucwords( $this->color ) . "\n";
    }
}

// Access class & Create new Object
$fooObj = new Foo();

// echo $fooObj->color = "red \n";

$fooObj->setColor( "White \n" );
echo $fooObj->getColor();

$fooObj->setColor( "black \n" );
echo $fooObj->getColor();
