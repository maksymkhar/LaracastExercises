<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 22/11/15
 * Time: 19:22
 */

class Person
{
    public $name;
    public $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        if ($age < 18)
        {
            throw new Exception("Person is not old enough.");
        }

        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age * 365;
    }
}

$john = new Person('John Doe');
$john->setAge(18);

$john->age = 3;

var_dump($john->getAge());