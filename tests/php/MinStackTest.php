<?php

namespace LeetCode\Tests;

use LeetCode\Problems\MinStack\MinStack;
use PHPUnit\Framework\TestCase;

final class MinStackTest extends TestCase
{
    public function testMinStackExample1()
    {
        $ms = new MinStack();
        $this->assertNull($ms->push(-2));
        $this->assertNull($ms->push(0));
        $this->assertNull($ms->push(-3));
        $this->assertEquals(-3, $ms->getMin());
        $this->assertNull($ms->pop());
        $this->assertEquals(0, $ms->top());
        $this->assertEquals(-2, $ms->getMin());
    }
}
