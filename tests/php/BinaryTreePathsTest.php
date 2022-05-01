<?php

namespace LeetCode\Tests;

use LeetCode\Problems\BinaryTreePaths\BinaryTreePaths;
use LeetCode\Problems\Helpers\TreeNode;
use PHPUnit\Framework\TestCase;

final class BinaryTreePathsTest extends TestCase
{
	public function testBinaryTreePathsTestExample1()
	{
        $btp = new BinaryTreePaths();
        $a = new TreeNode(1);
        $b = new TreeNode(2);
        $c = new TreeNode(3);
        $d = new TreeNode(5);
        $a->left = $b;
        $a->right = $c;
        $b->right = $d;
        $g = $btp->binaryTreePaths($a);
        $this->assertEquals(['1->2->5', '1->3'], $g);
	}
}
