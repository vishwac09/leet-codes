<?php

/**
 * Autogenerated test case file for problem DetectCapitalTest
 */
namespace LeetCode\Tests;

use LeetCode\Problems\DetectCapital\DetectCapital;
use PHPUnit\Framework\TestCase;

final class DetectCapitalTest extends TestCase
{
	public function testDetectCapitalTestExample1()
	{
		$dc = new DetectCapital();
		$this->assertEquals(TRUE, $dc->detectCapitalUse('USA'));
		$this->assertEquals(TRUE, $dc->detectCapitalUse('INDIA'));
		$this->assertEquals(TRUE, $dc->detectCapitalUse('uasa'));
		$this->assertEquals(FALSE, $dc->detectCapitalUse('FlaG'));
		$this->assertEquals(TRUE, $dc->detectCapitalUse('Leetcode'));
	}
}