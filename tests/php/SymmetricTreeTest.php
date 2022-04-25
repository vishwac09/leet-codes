<?php

namespace LeetCode\Tests;

use LeetCode\Problems\SymmetricTree\SymmetricTree;
use LeetCode\Problems\Helpers\TreeNode;
use PHPUnit\Framework\TestCase;

final class SymmetricTreeTest extends TestCase
{
	public function testSymmetricTreeTestExample1()
	{
        $a = new TreeNode(1);
        $b = new TreeNode(2);
        $c = new TreeNode(2);
        $d = new TreeNode(3);
        $e = new TreeNode(4);
        $f = new TreeNode(4);
        $g = new TreeNode(3);
        $a->left = $b;
        $a->right = $c;
        $b->left = $d;
        $b->right = $e;
        $c->left = $f;
        $c->right = $g;
        $st = new SymmetricTree();
        //$this->assertEquals(true, $st->isSymmetric($a));
        $p = new TreeNode(1);
        $q = new TreeNode(2);
        $r = new TreeNode(3);
        $p->left = $q;
        $p->right = $r;
        //$this->assertEquals(false, $st->isSymmetric($p));
        $u = new TreeNode(1);
        $v = new TreeNode(2);
        $x = new TreeNode(2);
        $y = new TreeNode(3);
        $z = new TreeNode(3);
        $u->left = $v;
        $u->right = $x;
        $v->right = $y;
        $x->right = $z;
        $this->assertEquals(false, $st->isSymmetric($u));
	}
}
