<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 22/11/15
 * Time: 20:37
 */

namespace Acme\Users;

class Person
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}