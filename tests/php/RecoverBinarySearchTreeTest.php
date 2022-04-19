<?php

namespace LeetCode\Tests;

use LeetCode\Problems\RecoverBinarySearchTree\RecoverBinarySearchTree;
use PHPUnit\Framework\TestCase;
use LeetCode\Tests\Helpers\TreeNode;

final class RecoverBinarySearchTreeTest extends TestCase
{
	public function testRecoverBinarySearchTreeTestExample1()
	{
        $rbst = new RecoverBinarySearchTree();
        $a = new TreeNode(1);
        $b = new TreeNode(3);
        $c = new TreeNode(2);
        $a->left = $b;
        $b->right = $c;
        $result = $rbst->recoverTree($a);
        $this->assertEquals(3, $result->val);
	}
}
