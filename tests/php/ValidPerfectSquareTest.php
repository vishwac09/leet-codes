<?php

namespace LeetCode\Tests;

use LeetCode\Problems\ValidPerfectSquare\ValidPerfectSquare;
use PHPUnit\Framework\TestCase;

final class ValidPerfectSquareTest extends TestCase
{
    public function testValidPerfectSquareTestExample1()
    {
        $vps = new ValidPerfectSquare();
        $this->assertEquals(true, $vps->isPerfectSquare(16));
        $this->assertEquals(false, $vps->isPerfectSquare(15));
    }
}
