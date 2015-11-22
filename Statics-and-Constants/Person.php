<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 22/11/15
 * Time: 23:58
 */

class Person
{
    public $age = 1;

    public function haveBirthday()
    {
        $this->age += 1;
    }

    public function age()
    {
        return $this->age;
    }
}

$joe = new Person;
$joe->haveBirthday();
$joe->haveBirthday();

echo $joe->age();

$jane = new Person;
$jane->haveBirthday();
echo $jane->age();