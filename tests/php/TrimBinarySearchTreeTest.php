<?php

namespace LeetCode\Tests;

use LeetCode\Problems\TrimBinarySearchTree\TrimBinarySearchTree;
use LeetCode\Problems\Helpers\TreeNode;
use PHPUnit\Framework\TestCase;

final class TrimBinarySearchTreeTest extends TestCase
{
	public function testTrimBinarySearchTreeTestExample1()
	{
        $tbst = new TrimBinarySearchTree();
        $a = new TreeNode(0);
        $b = new TreeNode(2);
        $c = new TreeNode(1, $a, $b);
        $res = $tbst->trimBST($c, 1, 3);
        $this->assertEquals(1, $res->val);
        $this->assertEquals(2, $res->right->val);
        $d = new TreeNode(0);
        $e = new TreeNode(4);
        $f = new TreeNode(3, $d, $e);
        $g = new TreeNode(2);
        $h = new TreeNode(1);
        $d->right = $g;
        $g->left = $h;
        $res = $tbst->trimBST($f, 1, 3);
        $this->assertEquals(3, $res->val);
        $this->assertEquals(2, $res->left->val);
        $p = new TreeNode(1);
        $q = new TreeNode(2);
        $p->right = $q;
        $res = $tbst->trimBST($p, 2, null);
        $this->assertEquals(2, $res->val);
        $x = new TreeNode(9);
        $y = new TreeNode(11);
        $x->left = $y;
        $res = $tbst->trimBST($x, 10, null);
        $this->assertEquals(11, $res->val);
	}
}
