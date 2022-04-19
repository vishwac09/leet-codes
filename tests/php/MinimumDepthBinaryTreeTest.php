<?php

namespace LeetCode\Tests;

use LeetCode\Problems\MinimumDepthBinaryTree\MinimumDepthBinaryTree;
use LeetCode\Tests\Helpers\TreeNode;
use PHPUnit\Framework\TestCase;
final class MinimumDepthBinaryTreeTest extends TestCase
{
	public function testMinimumDepthBinaryTreeTestExample1()
	{
        $mdbt = new MinimumDepthBinaryTree();
        $d = new TreeNode(4);
        $a = new TreeNode(1);
        $b = new TreeNode(3, null, $d);
        $c = new TreeNode(1, $a, $b);
        $this->assertEquals(2, $mdbt->minDepth($c));
	}
}
