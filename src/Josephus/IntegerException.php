<?php

namespace App\Josephus;

use Exception;

class IntegerException extends Exception
{
 public $message = "Number should be an integer";
}