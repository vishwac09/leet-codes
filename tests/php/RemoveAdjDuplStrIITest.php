<?php

namespace LeetCode\Tests;

use LeetCode\Problems\RemoveAdjDuplStrII\RemoveAdjDuplStrII;
use PHPUnit\Framework\TestCase;

final class RemoveAdjDuplStrIITest extends TestCase
{
    public function testRemoveAdjDuplStrIITestExample1()
    {
        $rads = new RemoveAdjDuplStrII();
        $this->assertEquals('abcd', $rads->removeDuplicates('abcd', 2));
        $this->assertEquals('aa', $rads->removeDuplicates('deeedbbcccbdaa', 3));
    }
}
