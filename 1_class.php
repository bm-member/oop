<?php

class Person
{
    public $name = 'Mg Mg';

    public function eat()
    {
        return 'Eat food';
    }
}

$person = new Person();
echo $person->name;
echo $p->eat();