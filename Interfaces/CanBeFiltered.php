<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 22/11/15
 * Time: 20:31
 */

interface CanBeFiltered
{
    public function filter();
}

class Favorited implements CanBeFiltered
{
    public function filter()
    {
        // TODO: Implement filter() method.
    }
}

class Unwatched implements CanBeFiltered
{
    public function filter()
    {
        // TODO: Implement filter() method.
    }
}

class Difficulty implements CanBeFiltered
{
    public function filter()
    {
        // TODO: Implement filter() method.
    }
}