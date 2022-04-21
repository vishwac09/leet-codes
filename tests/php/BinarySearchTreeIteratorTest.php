<?php

namespace LeetCode\Tests;

use LeetCode\Problems\BinarySearchTreeIterator\BinarySearchTreeIterator;
use PHPUnit\Framework\TestCase;
use LeetCode\Tests\Helpers\TreeNode;

final class BinarySearchTreeIteratorTest extends TestCase
{
	public function testBinarySearchTreeIteratorTestExample1()
	{
        $a = new TreeNode(7);
        $b = new TreeNode(3);
        $c = new TreeNode(15);
        $d = new TreeNode(9);
        $e = new TreeNode(20);
        $a->left = $b;
        $a->right = $c;
        $c->left = $d;
        $c->right = $e;
        $bsti = new BinarySearchTreeIterator($a);
        $this->assertEquals(3, $bsti->next());
	}
}
