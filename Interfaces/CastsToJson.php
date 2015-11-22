<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 22/11/15
 * Time: 20:28
 */

interface CastsToJson
{
    public function toJson();
}

class User implements CastsToJson
{
    public function toJson()
    {
        // TODO: Implement toJson() method.
    }
}

class Collection implements CastsToJson
{
    public function toJson()
    {
        // TODO: Implement toJson() method.
    }
}