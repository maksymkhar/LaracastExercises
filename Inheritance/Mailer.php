<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 22/11/15
 * Time: 19:51
 */

class Mailer
{
    public function send($to, $from, $body)
    {

    }
}

class UserMailer extends Mailer
{
    public function sendWelcomeEmail(User $user)
    {
        return $this->send($user->email);
    }
}