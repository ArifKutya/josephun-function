<?php

namespace App\Josephus;

use Exception;

class NumberException extends Exception
{
 public $message = "Number should be >= 1";
}