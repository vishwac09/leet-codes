<?php

namespace LeetCode\Tests;

use LeetCode\Problems\TransposeMatrix\TransposeMatrix;
use PHPUnit\Framework\TestCase;
final class TransposeMatrixTest extends TestCase
{
	public function testTransposeMatrixTestExample1()
	{
		$tm = new TransposeMatrix();
		$ip = [[1,2,3],[4,5,6]];
		$op = [[1,4],[2,5],[3,6]];
		$this->assertEquals($op, $tm->transpose($ip));
	}
}
