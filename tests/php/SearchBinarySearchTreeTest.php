<?php

namespace LeetCode\Tests;

use LeetCode\Problems\SearchBinarySearchTree\SearchBinarySearchTree;
use LeetCode\Problems\Helpers\TreeNode;
use PHPUnit\Framework\TestCase;

final class SearchBinarySearchTreeTest extends TestCase
{
	public function testSearchBinarySearchTreeExample1()
	{
        $sbst = new SearchBinarySearchTree();
        $a = new TreeNode(3);
        $b = new TreeNode(1);
        $c = new TreeNode(2, $b, $a);
        $t = new TreeNode(9);
        $d = new TreeNode(7, null, $t);
        $e = new TreeNode(4, $c, $d);
        $this->assertEquals($c, $sbst->searchBST($e, 2));
        $this->assertEquals(null, $sbst->searchBST($e, 10));
        $this->assertEquals($d, $sbst->searchBST($e, 7));
        $this->assertEquals($t, $sbst->searchBST($e, 9));
	}
}
