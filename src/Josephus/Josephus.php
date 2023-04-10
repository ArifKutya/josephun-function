<?php

namespace App\Josephus;

use Exception;

class Josephus
{
    /**
     * @param  $n
     * @return int
     * @throws Exception
     */
    public function solve($n): int
    {
        return $this->findLastPerson($n);
    }

    /**
     * @param $n
     * @return int
     * @throws Exception
     */
    private function findLastPerson($n): int
    {
        if (!is_int($n)) {
            throw new IntegerException();
        }
        if ($n < 1) {
            throw new NumberException();
        }
        $binary = decbin($n);
        $binary = substr($binary, 1) . '1';
        return bindec($binary);
    }


}