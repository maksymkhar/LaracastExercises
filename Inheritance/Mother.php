<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 22/11/15
 * Time: 19:34
 */

class Mother
{
    public function getEyeCount()
    {
        return 2;
    }
}
class Child extends Mother
{

}

(new Child)->getEyeCount();