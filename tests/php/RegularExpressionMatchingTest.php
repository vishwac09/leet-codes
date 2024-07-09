<?php

namespace LeetCode\Tests;

use PHPUnit\Framework\TestCase;
use LeetCode\Problems\RegularExpressionMatching\RegularExpressionMatching;

final class RegularExpressionMatchingTest extends TestCase
{
    public function testRegularExpressionMatchingExample1()
    {
        $rem = new RegularExpressionMatching();
        $this->assertSame(true, $rem->isMatch("aa", "a"));
    }
}
