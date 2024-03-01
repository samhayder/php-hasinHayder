<?php

class Animal {
    protected $name;
    public function __construct( $name ) {
        $this->name = ucfirst( $name );
    }

    public function eat() {
        echo "{$this->name} Eating some foods\n";
    }

    public function run() {
        echo "Now, {$this->name} Running...\n";
    }

    public function sleep() {
        echo "Now, {$this->name} Sleeping..\n";
    }
}

class Human extends Animal {
    public function getting() {
        echo "{$this->name} says Hi\n";
    }
}

$robin = new Human( "Robin" );
$robin->getting();
$robin->eat();
$robin->run();
$robin->sleep();

class Cat extends Animal {
    public function getting() {
        echo "{$this->name} says Meow\n";
    }
}
$tom = new Human( "tom" );
$tom->getting();
$tom->eat();
$tom->run();
$tom->sleep();

/* Calculator Class */
class Calculator {
    protected $name, $result;

    public function __construct( $name ) {
        $this->name = $name;
        $this->operation();
        $this->getDisplay();
    }

    public function getDisplay() {
        echo "{$this->name}: {$this->result} \n";
    }

    public function operation() {}
}

class Sum extends Calculator {
    private $nam1, $nam2;
    public function __construct( int $nam1, int $nam2 ) {
        $this->nam1 = $nam1;
        $this->nam2 = $nam2;
        parent::__construct( "Sum" );
    }

    public function operation() {
        $this->result = $this->nam1 + $this->nam2;
    }

}

$sr = new Sum( 2, 3 );
$sr1 = new Sum( 20, 13 );
