<?php

namespace LeetCode\Tests;

use LeetCode\Problems\PathSum\PathSum;
use LeetCode\Tests\Helpers\TreeNode;
use PHPUnit\Framework\TestCase;

final class PathSumTest extends TestCase
{
	public function testPathSumTestExample1()
	{
        $sbst = new PathSum();
        $a = new TreeNode(2);
        $b = new TreeNode(3);
        $c = new TreeNode(1, $a, $b);
        $this->assertEquals(true, $sbst->hasPathSum($c, 3));
        $a = new TreeNode(5);
        $b = new TreeNode(4);
        $c = new TreeNode(8);
        $d = new TreeNode(11);
        $e = new TreeNode(13);
        $f = new TreeNode(4);
        $g = new TreeNode(7);
        $h = new TreeNode(2);
        $i = new TreeNode(1);
        $a->left = $b;
        $a->right = $c;
        $b->left = $d;
        $c->left = $e;
        $c->right = $f;
        $f->right = $i;
        $d->left = $g;
        $d->right = $h;
        $this->assertEquals(true, $sbst->hasPathSum($a, 22));
        $this->assertEquals(false, $sbst->hasPathSum($a, 25));
        $this->assertEquals(false, $sbst->hasPathSum([], 0));
        $r = new TreeNode(1);
        $q = new TreeNode(2);
        $r->left = $q;
        $this->assertEquals(false, $sbst->hasPathSum($r, 1));
	}
}
