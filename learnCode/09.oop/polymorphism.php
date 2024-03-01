<?php

interface BaseAnimal {
    public function isAlive();
    function isEat();
    function breath();
}

class Animal implements BaseAnimal {
    function isAlive() {}
    function isEat() {}
    function breath() {}
}

interface BaseHuman extends BaseAnimal {
    public function canTalk();
}

class HumanOne implements BaseHuman {
    function isAlive() {}
    function isEat() {}
    function breath() {}
    function canTalk() {}
}

$h = new HumanOne();
echo $h instanceof BaseAnimal;
echo $h instanceof Animal;
echo $h instanceof BaseHuman;
