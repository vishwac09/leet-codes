<?php

/**
 * Autogenerated test case file for problem RemovePalindromicSubsequencesTest
 */

use LeetCode\Problems\RemovePalindromicSubsequences\RemovePalindromicSubsequences;
use PHPUnit\Framework\TestCase;

final class RemovePalindromicSubsequencesTest extends TestCase
{
    public function testRemovePalindromicSubsequencesTestExample1()
    {
        $rps = new RemovePalindromicSubsequences();
        $this->assertEquals(1, $rps->removePalindromeSub('ababa'));
    }
}
