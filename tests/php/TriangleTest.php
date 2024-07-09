<?php

namespace LeetCode\Tests;

use LeetCode\Problems\Triangle\Triangle;
use PHPUnit\Framework\TestCase;

final class TriangleTest extends TestCase
{
    public function testTriangleTestExample1()
    {
        $t = new Triangle();
        $this->assertEquals(11, $t->minimumTotal([[2],[3,4],[6,5,7],[4,1,8,3]]));
    }
}
