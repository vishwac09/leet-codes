<?php

namespace LeetCode\Tests;

use LeetCode\Problems\MaximumDepthBinaryTree\MaximumDepthBinaryTree;
use PHPUnit\Framework\TestCase;
use LeetCode\Problems\Helpers\TreeNode;

final class MaximumDepthBinaryTreeTest extends TestCase
{
	public function testMaximumDepthBinaryTreeTestExample1()
	{
        $mdbt = new MaximumDepthBinaryTree();
        $d = new TreeNode(4);
        $a = new TreeNode(1);
        $b = new TreeNode(3, null, $d);
        $c = new TreeNode(1, $a, $b);
        $this->assertEquals(3, $mdbt->maxDepth($c));
	}
}
