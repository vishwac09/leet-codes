<?php

namespace LeetCode\Tests;

use LeetCode\Problems\HappyNumber\HappyNumber;
use PHPUnit\Framework\TestCase;

final class HappyNumberTest extends TestCase
{
    public function testHappyNumberTestExample1()
    {
        $hn = new HappyNumber();
        $this->assertEquals(true, $hn->isHappy(19));
        $this->assertEquals(false, $hn->isHappy(2));
    }
}
