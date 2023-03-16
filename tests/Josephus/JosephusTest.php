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