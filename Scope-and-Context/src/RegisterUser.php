<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 22/11/15
 * Time: 23:01
 */

namespace Acme;

class RegisterUser
{
    public function execute(array $data, $listener) //RespondsToUserRegistration $listener)
    {
        var_dump('Registering the user.');

        $listener->userRegisteredSuccessfully();
    }
}