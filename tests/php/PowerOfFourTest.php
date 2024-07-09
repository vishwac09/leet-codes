<?php

/**
 * Autogenerated test case file for problem PowerOfFourTest
 */

namespace LeetCode\Tests;

use LeetCode\Problems\PowerOfFour\PowerOfFour;
use PHPUnit\Framework\TestCase;

final class PowerOfFourTest extends TestCase
{
    public function testPowerOfFourTestExample1()
    {
        $pof = new PowerOfFour();
        $this->assertEquals(true, $pof->isPowerOfFour(16));
    }
}
