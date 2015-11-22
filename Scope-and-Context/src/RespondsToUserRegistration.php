<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 22/11/15
 * Time: 23:27
 */

namespace Acme;

interface RespondsToUserRegistration {
    public function userRegisteredSuccessfully();
    public function userRegisteredFailed();
}