<?php

namespace Mvc\Source\Exceptions\Database;

use Exception;

class DatabaseConnException extends Exception
{

    public function __construct($message = null, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}
