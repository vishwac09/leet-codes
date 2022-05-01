<?php

namespace LeetCode\Tests;

use LeetCode\Problems\BackspaceStringCompare\BackspaceStringCompare;
use PHPUnit\Framework\TestCase;
final class BackspaceStringCompareTest extends TestCase
{
	public function testBackspaceStringCompareTestExample1()
	{
        $bsc = new BackspaceStringCompare();
        $this->assertEquals(true, $bsc->backspaceCompare('ab#c', 'ad#c'));
        $this->assertEquals(true, $bsc->backspaceCompare('ab##', 'c#d#'));
        $this->assertEquals(false, $bsc->backspaceCompare('a#c', 'b'));
        $this->assertEquals(true, $bsc->backspaceCompare('#', '#'));
        $this->assertEquals(false, $bsc->backspaceCompare('a', 'b'));
        $this->assertEquals(true, $bsc->backspaceCompare('xywrrmp', 'xywrrmu#p'));
        $this->assertEquals(true, $bsc->backspaceCompare('y#fo##f', 'y#f#o##f'));
	}
}
