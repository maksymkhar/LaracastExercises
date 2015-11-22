<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 22/11/15
 * Time: 23:19
 */

require "src/AuthController.php";
require "src/RegisterUser.php";

use Acme\RegisterUser;
use Acme\AuthController;

$registration = new RegisterUser();
$authController = new AuthController($registration);

$authController->register();