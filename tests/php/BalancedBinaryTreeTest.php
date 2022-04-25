<?php

namespace LeetCode\Tests;

use LeetCode\Problems\BalancedBinaryTree\BalancedBinaryTree;
use PHPUnit\Framework\TestCase;
use LeetCode\Tests\Helpers\TreeNode;

final class BalancedBinaryTreeTest extends TestCase
{
	public function testBalancedBinaryTreeTestExample1()
	{
        $bbt = new BalancedBinaryTree();
        $g = new TreeNode(1);
        $h = new TreeNode(2);
        $i = new TreeNode(3);
        $g->right = $h;
        $h->right = $i;
        $this->assertEquals(false, $bbt->isBalanced($g));
	}
}
