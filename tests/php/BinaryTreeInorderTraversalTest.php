<?php

namespace LeetCode\Tests;

use LeetCode\Problems\BinaryTreeInorderTraversal\BinaryTreeInorderTraversal;
use PHPUnit\Framework\TestCase;

final class BinaryTreeInorderTraversalTest extends TestCase
{
	public function testBinaryTreeInorderTraversalExample1()
	{
        $btit = new BinaryTreeInorderTraversal();
        $ln = new TreeNode(3);
        $rn = new TreeNode(2, $ln, null);
        $mn = new TreeNode(1, null, $rn);
        $this->assertEquals([1,3,2], $btit->inorderTraversal($mn));
	}
}

class TreeNode {
    public $val = null;
    public $left = null;
    public $right = null;
    function __construct($val = 0, $left = null, $right = null) {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}