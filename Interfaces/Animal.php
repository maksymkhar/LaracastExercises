<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 22/11/15
 * Time: 20:11
 */

interface Animal
{
    public function communicate();
}

class Dog implements Animal
{
    public function communicate()
    {
        return 'bark';
    }
}

class Cat implements Animal
{
    public function communicate()
    {
        return 'meow';
    }
}