<?php

namespace LeetCode\Tests;

use LeetCode\Problems\PalindromicSubstrings\PalindromicSubstrings;
use PHPUnit\Framework\TestCase;

final class PalindromicSubstringsTest extends TestCase
{
    public function testPalindromicSubstringsTestExample1()
    {
        $ps = new PalindromicSubstrings();
        $this->assertEquals(4, $ps->countSubstrings('aaa'));
    }
}
