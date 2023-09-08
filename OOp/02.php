<?php
class Human{
    public $name;
    function sayHi(){
        echo "Namsaker";
    }
    function sayName(){
        echo "My name is {$this -> name}";
    }
}

class Dog{
    function sayHi(){
        echo "Gheu gheu";
    }
}

class Cat{
    function sayHi(){
        echo "Woof";
    }
}

$h1 = new Human();
$h1 -> name = "Bibek";
$h1 ->sayName();
$c1 = new Cat();
$d1 = new Dog();

$h1 -> sayHi();
echo $h1->name;
$c1 -> sayHi();
$d1 -> sayHi();