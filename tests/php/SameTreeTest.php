<?php

namespace LeetCode\Tests;

use LeetCode\Problems\SameTree\SameTree;
use LeetCode\Problems\Helpers\TreeNode;
use PHPUnit\Framework\TestCase;

final class SameTreeTest extends TestCase
{
	public function testSameTreeExample1()
	{
        $st = new SameTree();
        $a = new TreeNode(1, null);
        $b = new TreeNode(1, $a);
        $p = new TreeNode(1, null);
        $q = new TreeNode(1, $p);
        $this->assertEquals(true, $st->isSameTree($b, $q));
	}
}
