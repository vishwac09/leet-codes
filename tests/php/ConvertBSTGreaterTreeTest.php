<?php

namespace LeetCode\Tests;

use LeetCode\Problems\ConvertBSTGreaterTree\ConvertBSTGreaterTree;
use LeetCode\Problems\Helpers\TreeNode;
use PHPUnit\Framework\TestCase;

final class ConvertBSTGreaterTreeTest extends TestCase
{
	public function testConvertBSTGreaterTreeTestExample1()
	{
        $cbgt = new ConvertBSTGreaterTree();
        $a = new TreeNode(1);
        $b = new TreeNode(3);
        $c = new TreeNode(2, $a, $b);
        $res = $cbgt->convertBST($c);
        $this->assertEquals(5, $res->val);
    }
}
