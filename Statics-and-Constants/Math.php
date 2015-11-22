<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 22/11/15
 * Time: 23:49
 */

class Math
{
    public function add()
    {
        return array_sum(func_get_args());
    }
}

echo Math::add(1, 2, 3);

//$math = new Math;
//var_dump($math->add(1, 2, 3, 4));