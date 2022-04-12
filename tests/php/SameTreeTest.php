<?php

namespace LeetCode\Tests;

use LeetCode\Problems\SameTree\SameTree;
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

class TreeNodes {
    public $val = null;
    public $left = null;
    public $right = null;
    function __construct($val = 0, $left = null, $right = null) {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}