<?php

namespace LeetCode\Tests;

use LeetCode\Problems\BalancedBinaryTree\BalancedBinaryTree;
use PHPUnit\Framework\TestCase;
use LeetCode\Tests\Helpers\TreeNode;

final class BalancedBinaryTreeTest extends TestCase
{
	public function testBalancedBinaryTreeTestExample1()
	{
        $a = new TreeNode(3);
        $b = new TreeNode(9);
        $c = new TreeNode(20);
        $d = new TreeNode(15);
        $e = new TreeNode(7);
        $f = new TreeNode(6);
        $a->left = $b;
        $a->right = $c;
        $c->left = $d;
        $c->right = $e;
        $bbt = new BalancedBinaryTree();
        //$this->assertEquals(true, $bbt->isBalanced($a));
        $g = new TreeNode(1);
        $h = new TreeNode(2);
        $i = new TreeNode(3);
//        $j = new TreeNode(3);
//        $k = new TreeNode(3);
//        $l = new TreeNode(4);
//        $m = new TreeNode(4);
        $g->right = $h;
        $h->right = $i;
        
        $this->assertEquals(false, $bbt->isBalanced($g));
	}
}
