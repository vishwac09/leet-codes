<?php

namespace LeetCode\Tests;

use LeetCode\Problems\BinaryTreePreorderTraversal\BinaryTreePreorderTraversal;
use LeetCode\Problems\Helpers\TreeNode;
use PHPUnit\Framework\TestCase;

final class BinaryTreePreorderTraversalTest extends TestCase
{
	public function testBinaryTreePreorderTraversalExample1()
	{
        $btpt = new BinaryTreePreorderTraversal();
        $ln = new TreeNode(3);
        $rn = new TreeNode(2, $ln, null);
        $mn = new TreeNode(1, null, $rn);
        $this->assertEquals([1,2,3], $btpt->preorderTraversal($mn));
	}
}
