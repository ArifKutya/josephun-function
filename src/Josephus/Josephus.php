<?php

namespace App\Josephus;

class Josephus
{
    public function solve($n): int
    {
        $index = 0;
        $people = range(1, $n);

        while (count($people) > 1) {
            $index = ($index + 1) % count($people);
            array_splice($people, $index, 1);

            if ($index == count($people)) {
                $index = 0;
            }
        }
        return $people[0];
    }


}