<?php

namespace LeetCode\Tests;

use LeetCode\Problems\AddDigits\AddDigits;
use PHPUnit\Framework\TestCase;

final class AddDigitsTest extends TestCase
{
    public function testAddDigitsTestExample1()
    {
        $ad = new AddDigits();
        $this->assertEquals(2, $ad->addDigits(38));
        $this->assertEquals(0, $ad->addDigits(0));
    }
}
