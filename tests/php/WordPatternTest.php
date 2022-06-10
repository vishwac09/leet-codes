<?php

namespace LeetCode\Tests;

use LeetCode\Problems\WordPattern\WordPattern;
use PHPUnit\Framework\TestCase;

final class WordPatternTest extends TestCase
{
	public function testWordPatternTestExample1()
	{
		$wp = new WordPattern();
		$this->assertEquals(true, $wp->wordPattern("abba", "dog cat cat dog"));
	}
}
