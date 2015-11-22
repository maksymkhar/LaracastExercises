<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 22/11/15
 * Time: 20:29
 */

interface Repository
{
    public function save($data);
}

class MongoRepository implements Repository
{
    public function save($data)
    {

    }
}

class FileRepository implements Repository
{
    public function save($data)
    {

    }
}