<?php

namespace App\Josephus;

class Josephus
{
    /**
     * @param $n
     * @return int
     */
    public function solve($n): int
    {
        return $this->findLastPerson($n);
    }

    /**
     * @param $n
     * @return int
     */
    private function findLastPerson($n): int
    {
        $binary = decbin($n);
        $firstPosition = substr($binary, 0, 1);
        $newLast = $firstPosition;
        $binary = substr($binary, 1) . $newLast;

        return bindec($binary);
    }


}