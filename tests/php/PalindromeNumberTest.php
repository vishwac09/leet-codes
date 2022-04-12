<?php

namespace LeetCode\Tests;

use PHPUnit\Framework\TestCase;
use LeetCode\Problems\PalindromeNumber\PalindromeNumber;

final class PalindromeNumberTest extends TestCase
{
    public function testPalindromNumberExample1()
    {
        $palindromeNumber = new PalindromeNumber();
        $this->assertEquals(true, $palindromeNumber->isPalindrome(121));
    }
}
