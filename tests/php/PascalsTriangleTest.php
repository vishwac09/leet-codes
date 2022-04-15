<?php

namespace LeetCode\Tests;

use LeetCode\Problems\PascalsTriangle\PascalsTriangle;
use PHPUnit\Framework\TestCase;

final class PascalsTriangleTest extends TestCase
{
	public function testPascalsTriangleTestExample1()
	{
        $pt = new PascalsTriangle();
        $this->assertEquals([[1],[1,1],[1,2,1],[1,3,3,1],[1,4,6,4,1]], $pt->generate(5));
        $this->assertEquals([[1]], $pt->generate(1));
	}
}
