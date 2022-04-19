<?php

namespace LeetCode\Tests;

use LeetCode\Problems\PathSumII\PathSumII;
use LeetCode\Tests\Helpers\TreeNode;
use PHPUnit\Framework\TestCase;

final class PathSumIITest extends TestCase
{
	public function testPathSumIITestExample1()
	{
        $ps = new PathSumII();
        $a = new TreeNode(2);
        $b = new TreeNode(3);
        $c = new TreeNode(1, $a, $b);
        $this->assertEquals([[1, 2]], $ps->pathSum($c, 3));
	}
}
