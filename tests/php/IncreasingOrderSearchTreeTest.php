<?php

namespace LeetCode\Tests;

use LeetCode\Problems\IncreasingOrderSearchTree\IncreasingOrderSearchTree;
use LeetCode\Tests\Helpers\TreeNode;
use PHPUnit\Framework\TestCase;

final class IncreasingOrderSearchTreeTest extends TestCase
{
	public function testIncreasingOrderSearchTreeTestExample1()
	{
        $iost = new IncreasingOrderSearchTree();
        $ln = new TreeNode(1);
        $rn = new TreeNode(7);
        $mn = new TreeNode(5, $ln, $rn);
        $result = $iost->increasingBST($mn);
        $this->assertEquals(1, $result->val);
	}
}
