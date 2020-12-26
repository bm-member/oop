<?php

class Animal
{
    protected $name = 'Animal';

    public function eat()
    {
        echo 'Eat';
    }

    public function sleep()
    {
        echo 'Sleep';
    }

    public function go()
    {
        echo 'Go';
    }
}

class Dog extends Animal
{
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        echo $this->name;
    }
}

$dog = new Dog;
$dog->setName('Aung Net');
$dog->getName();