<?php

namespace LeetCode\Tests;

use PHPUnit\Framework\TestCase;
use LeetCode\Problems\ATOI\ATOI;

class ATOITest extends TestCase
{
    public function testATOIExample1()
    {
        $atoi = new ATOI();
        $this->assertSame(42, $atoi->myAtoi("42uqehoqwheowheoqweQWEQWE**"));
        $this->assertSame(-42, $atoi->myAtoi("-42uqehoqwheowheoqweQWEQWE**"));
        $this->assertSame(98, $atoi->myAtoi("+98uqehoqwheowheoqweQWEQWE**"));
        $this->assertSame(0, $atoi->myAtoi("words-87uqehoqwheowheoqweQWEQWE**"));
        $this->assertSame(89, $atoi->myAtoi("      89    "));
        $this->assertSame(3, $atoi->myAtoi("3.14159"));
        $this->assertSame(-115579378, $atoi->myAtoi("   -115579378e25"));
    }
}