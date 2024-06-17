<?php

namespace App\Domains\User\ErrorHandling;

use Exception;

class WrongPasswordException extends Exception
{
    public function __construct() {
        parent::__construct("Wrong password");
    }
}
