<?php

namespace LeetCode\Tests;

use LeetCode\Problems\StringContainsAllBinaryCodes\StringContainsAllBinaryCodes;
use PHPUnit\Framework\TestCase;

final class StringContainsAllBinaryCodesTest extends TestCase
{
    public function testStringContainsAllBinaryCodesTestExample1()
    {
        $scabc = new StringContainsAllBinaryCodes();
        $this->assertEquals(true, $scabc->hasAllCodes("00110110", 2));
        $this->assertEquals(true, $scabc->hasAllCodes("0110", 1));
        $this->assertEquals(false, $scabc->hasAllCodes("0110", 2));
    }
}
