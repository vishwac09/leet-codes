<?php


namespace LeetCode\Tests;

use PHPUnit\Framework\TestCase;
use LeetCode\Problems\ZigZag\ZigZag;

final class ZigZagTest extends TestCase
{
    public function testZigZagExample1()
    {
        $zz = new ZigZag();
        $this->assertSame('BAG', $zz->convert('BAG', 3));
        $this->assertSame('BA', $zz->convert('BA', 3));
        $this->assertSame('B', $zz->convert('B', 3));
        $this->assertNotSame('BSAG', $zz->convert('BAGS', 2));
        $this->assertSame('PAHNAPLSIIGYIR', $zz->convert('PAYPALISHIRING', 3));
        $this->assertSame('PINALSIGYAHRPI', $zz->convert('PAYPALISHIRING', 4));
        $this->assertSame('A', $zz->convert('A', 1));
    }
}
