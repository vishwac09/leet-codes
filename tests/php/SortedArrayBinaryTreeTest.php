<?php

namespace LeetCode\Tests;

use LeetCode\Problems\SortedArrayBinaryTree\SortedArrayBinaryTree;
use PHPUnit\Framework\TestCase;

final class SortedArrayBinaryTreeTest extends TestCase
{
	public function testSortedArrayBinaryTreeTestExample1()
	{
        //$nums = [-10,-3,0,5,9];
        $nums = [0,1,2,3,4,5];
        $sabt = new SortedArrayBinaryTree();
        $result = $sabt->sortedArrayToBST($nums);
        $this->assertEquals(2, $result->val);
	}
}
