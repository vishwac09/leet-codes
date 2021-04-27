<?php

namespace LeetCode\Tests;

use PHPUnit\Framework\TestCase;
use LeetCode\Problems\ReverseInteger\ReverseInteger;

final class ReverseIntegerTest extends TestCase
{

    public function testReverseIntegerExample1()
    {
        $revInt = new ReverseInteger();
        $this->assertSame(123, $revInt->reverse(321));
        $this->assertSame(0, $revInt->reverse(0));
        $this->assertSame(21, $revInt->reverse(120));
    }
}
