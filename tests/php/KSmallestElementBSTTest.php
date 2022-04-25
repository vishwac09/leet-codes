<?php

namespace LeetCode\Tests;

use LeetCode\Problems\KSmallestElementBST\KSmallestElementBST;
use LeetCode\Problems\Helpers\TreeNode;
use PHPUnit\Framework\TestCase;

final class KSmallestElementBSTTest extends TestCase
{
	public function testKSmallestElementBSTTestExample1()
	{
        $kseb = new KSmallestElementBST();
        $a = new TreeNode(3);
        $b = new TreeNode(1);
        $c = new TreeNode(4);
        $d = new TreeNode(2);
        $a->left = $b;
        $a->right = $c;
        $b->right = $d;
        $this->assertEquals(1, $kseb->kthSmallest($a,1));
	}
}
