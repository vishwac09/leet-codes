<?php

namespace LeetCode\Tests;

use LeetCode\Problems\ValidParentheses\ValidParentheses;
use PHPUnit\Framework\TestCase;

final class ValidParenthesesTest extends TestCase
{
	public function testValidParenthesesExample1()
	{
        $vp = new ValidParentheses();
        $this->assertEquals(true, $vp->isValid('((()))'));
        $this->assertEquals(false, $vp->isValid('((([)))'));
        $this->assertEquals(true, $vp->isValid('()[]{}'));
        $this->assertEquals(false, $vp->isValid('(])'));
        $this->assertEquals(false, $vp->isValid(')))()'));
        $this->assertEquals(true, $vp->isValid('()'));
        $this->assertEquals(true, $vp->isValid('(((((([[]]))))))'));
        $this->assertEquals(true, $vp->isValid('(((((((((((([[]]))))))))))))'));
        $this->assertEquals(false, $vp->isValid('([)]'));
        $this->assertEquals(false, $vp->isValid('(]'));
        $this->assertEquals(false, $vp->isValid('[[[]'));
        $this->assertEquals(true, $vp->isValid("[({(())}[()])]"));
	}
}
