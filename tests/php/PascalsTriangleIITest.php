<?php

namespace LeetCode\Tests;

use LeetCode\Problems\PascalsTriangleII\PascalsTriangleII;
use PHPUnit\Framework\TestCase;

final class PascalsTriangleIITest extends TestCase
{
    public function testPascalsTriangleIITestExample1()
    {
        $pt = new PascalsTriangleII();
        $this->assertEquals([1,3,3,1], $pt->getRow(3));
        $this->assertEquals([1], $pt->getRow(0));
        $this->assertEquals([1, 1], $pt->getRow(1));
    }
}
