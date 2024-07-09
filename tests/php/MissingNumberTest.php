<?php

namespace LeetCode\Tests;

use LeetCode\Problems\MissingNumber\MissingNumber;
use PHPUnit\Framework\TestCase;

final class MissingNumberTest extends TestCase
{
    public function testMissingNumberTestExample1()
    {
        $mn = new MissingNumber();
        $this->assertEquals(2, $mn->missingNumber([0, 1]));
        $this->assertEquals(2, $mn->missingNumber([3,0,1]));
    }
}
