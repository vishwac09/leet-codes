<?php

namespace LeetCode\Tests;

use PHPUnit\Framework\TestCase;
use LeetCode\Problems\LongestSubstring\LongestSubstring;

final class LongestSubstringTest extends TestCase
{
    public function testLongestSubstringExample1(): void
    {
        $lgSS = new LongestSubstring();
        $this->assertSame(3, $lgSS->lengthOfLongestSubstring('abcabc'));
        $this->assertSame(4, $lgSS->lengthOfLongestSubstring('abcabcd'));
        $this->assertSame(1, $lgSS->lengthOfLongestSubstring(' '));
        $this->assertSame(11, $lgSS->lengthOfLongestSubstring('abcdefgthisda'));
    }
}
