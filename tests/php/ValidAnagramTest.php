<?php

namespace LeetCode\Tests;

use LeetCode\Problems\ValidAnagram\ValidAnagram;
use PHPUnit\Framework\TestCase;

final class ValidAnagramTest extends TestCase
{
	public function testValidAnagramTestExample1()
	{
        $va = new ValidAnagram();
        $this->assertEquals(true, $va->isAnagram('anagram', 'nagaram'));
        $this->assertEquals(false, $va->isAnagram('rat', 'car'));
        $this->assertEquals(false, $va->isAnagram('aacc', 'ccac'));
        $this->assertEquals(true, $va->isAnagram('ab', 'ba'));
	}
}
