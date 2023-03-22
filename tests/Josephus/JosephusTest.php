<?php

namespace Tests\Josephus;

use App\Josephus\Josephus;
use PHPUnit\Framework\TestCase;

class JosephusTest extends TestCase
{
    /**
     * @return array
     */
    public function dataProvider(): array
    {
        return [
            [10, 5],
            [2, 1],
            [50, 37],
            [20, 9],
            [22, 13],
            [60000000, 52891137],
            [623423435345345345, 93925366083843715],
        ];
    }

    /**
     * @dataProvider dataProvider
     * @param $n
     * @param $expected
     * @return void
     */
    public function testJosephusFunction($n, $expected): void
    {

        $josephus = new Josephus();
        $result = $josephus->solve($n);
        $this->assertEquals($expected, $result);
    }

}