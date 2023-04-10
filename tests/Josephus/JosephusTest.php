<?php

namespace Tests\Josephus;

use App\Josephus\IntegerException;
use App\Josephus\Josephus;
use App\Josephus\NumberException;
use Exception;
use PHPUnit\Framework\TestCase;

class JosephusTest extends TestCase
{
    /**
     * @return array
     */
    public static function dataProvider(): array
    {
        return [
            [10, 5],
            [2, 1],
            [50, 37],
            [20, 9],
            [22, 13],
            [60000000, 52891137],
            [92233720368547758,40352252661239645],
        ];
    }

    /**
     * @return array[]
     */
    public static function IntegerExceptionDataProvider(): array
    {
        return [
            [23.5, 'Number should be an integer'],
            [12.4, 'Number should be an integer'],

        ];
    }

    /**
     * @return array[]
     */
    public static function NumberExceptionDataProvider(): array
    {
        return [
            [-10, 'Number should be >= 1'],
            [-1, 'Number should be >= 1'],

        ];
    }

    /**
     * @dataProvider dataProvider
     * @param $n
     * @param $expected
     * @return void
     * @throws Exception
     */
    public function testJosephusFunction($n, $expected): void
    {

        $josephus = new Josephus();
        $result = $josephus->solve($n);
        $this->assertEquals($expected, $result);
    }

    /**
     * @dataProvider IntegerExceptionDataProvider
     * @param $n
     * @param $expectedMessage
     * @return void
     * @throws Exception
     */
    public function testIntegerException($n, $expectedMessage): void
    {
        $this->expectException(IntegerException::class);
        $this->expectExceptionMessage($expectedMessage);
        $josephus = new Josephus();
        $josephus->solve($n);

    }

    /**
     * @dataProvider NumberExceptionDataProvider
     * @param $n
     * @param $expectedMessage
     * @return void
     * @throws Exception
     */
    public function testNumberException($n, $expectedMessage): void
    {
        $this->expectException(NumberException::class);
        $this->expectExceptionMessage($expectedMessage);
        $josephus = new Josephus();
        $josephus->solve($n);

    }
}