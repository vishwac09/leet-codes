<?php

namespace LeetCode\Tests;

use LeetCode\Problems\SumLeftLeaves\SumLeftLeaves;
use LeetCode\Problems\Helpers\TreeNode;
use PHPUnit\Framework\TestCase;

final class SumLeftLeavesTest extends TestCase
{
	public function testSumLeftLeavesTestExample1()
	{
        $sll = new SumLeftLeaves();
        $a = new TreeNode(1);
        $b = new TreeNode(2);
        $c = new TreeNode(3);
        $d = new TreeNode(4);
        $e = new TreeNode(5);
        $a->left = $b;
        $a->right = $c;
        $b->left = $d;
        $b->right = $e;
        $this->assertEquals(4, $sll->sumOfLeftLeaves($a));
	}
}
