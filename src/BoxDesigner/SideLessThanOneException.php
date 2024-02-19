<?php

declare(strict_types=1);

namespace BoxDesigner;

use \Exception;

class SideLessThanOneException extends Exception 
{
    public function __construct()
    {
        parent::__construct("The box rows and columns number must be greater than zero");
    }
}