<?php

namespace LeetCode\Tests;

use LeetCode\Problems\BinaryTreeInorderTraversal\BinaryTreeInorderTraversal;
use LeetCode\Problems\Helpers\TreeNode;
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