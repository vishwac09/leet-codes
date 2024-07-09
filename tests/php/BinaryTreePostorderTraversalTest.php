<?php

namespace LeetCode\Tests;

use LeetCode\Problems\BinaryTreePostorderTraversal\BinaryTreePostorderTraversal;
use LeetCode\Problems\Helpers\TreeNode;
use PHPUnit\Framework\TestCase;

final class BinaryTreePostorderTraversalTest extends TestCase
{
    public function testBinaryTreePostorderTraversalExample1()
    {
        $btpt = new BinaryTreePostorderTraversal();
        $ln = new TreeNode(3);
        $rn = new TreeNode(2, $ln, null);
        $mn = new TreeNode(1, null, $rn);
        $this->assertEquals([3,2,1], $btpt->postorderTraversal($mn));
    }
}
