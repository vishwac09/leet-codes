<?php

namespace LeetCode\Tests;

use LeetCode\Problems\AddBinary\AddBinary;
use PHPUnit\Framework\TestCase;

final class AddBinaryTest extends TestCase
{
    public function testAddBinaryExample1()
    {
        $ab = new AddBinary();
        $this->assertEquals("100", $ab->addBinary("11", "1"));
        $this->assertEquals("10101", $ab->addBinary("1010", "1011"));
    }
}
