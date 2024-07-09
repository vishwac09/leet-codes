<?php

namespace LeetCode\Tests;

use LeetCode\Problems\ReverseBits\ReverseBits;
use PHPUnit\Framework\TestCase;

final class ReverseBitsTest extends TestCase
{
    public function testReverseBitsExample1()
    {
        $rb = new ReverseBits();
        $i = 0b11111111111111111111111111111101;
        $o = 0b10111111111111111111111111111111;
        $this->assertEquals($o, $rb->reverseBits($i));
    }
}
