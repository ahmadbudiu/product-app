<?php

namespace App\Exceptions;

use Exception;

class MySQLErrorConnectionException extends Exception
{
    public function __construct($message = '', $code = 0, $previous = null)
    {
        parent::__construct('Can not connect to database', 500, $previous);
    }
}
