<?php

namespace LeetCode\Tests;

use LeetCode\Problems\ValidPalindrome\ValidPalindrome;
use PHPUnit\Framework\TestCase;

final class ValidPalindromeTest extends TestCase
{
	public function testValidPalindromeExample1()
	{
        $vp = new ValidPalindrome();
        //$this->assertEquals(true, $vp->isPalindrome("A man, a plan, a canal: Panama"));
        $this->assertEquals(true, $vp->isPalindrome("ab_a"));
	}
}
