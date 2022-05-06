<?php

namespace LeetCode\Tests;

use LeetCode\Problems\RemoveOutermostParentheses\RemoveOutermostParentheses;
use PHPUnit\Framework\TestCase;

final class RemoveOutermostParenthesesTest extends TestCase
{
	public function testRemoveOutermostParenthesesTestExample1()
	{
        $rop = new RemoveOutermostParentheses();
        $this->assertEquals('()()()', $rop->removeOuterParentheses('(()())(())'));
        $this->assertEquals('()()()()(())', $rop->removeOuterParentheses('(()())(())(()(()))'));
        $this->assertEquals('', $rop->removeOuterParentheses('()()'));
	}
}
