<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class PenjumlahanTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_penjumlahan(): void
    {
        $x = 10;
        $y = 5;
        $hasil = $x + $y;
        $this->assertEquals(15, $hasil);
    }

    public function test_penjumlahan_can_be_correct(): void
    {
        $x = 20;
        $y = 30;
        $hasil = $x + $y;
        $this->assertEquals(50, $hasil);
    }
}
