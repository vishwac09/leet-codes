<?php

namespace LeetCode\Tests {

    use LeetCode\Problems\InvertBinaryTree\InvertBinaryTree;
    use PHPUnit\Framework\TestCase;
    use LeetCode\Problems\Helpers\TreeNode;

    final class InvertBinaryTreeTest extends TestCase
    {
        public function testInvertBinaryTreeTestExample1()
        {
            $a = new TreeNode(2);
            $b = new TreeNode(1);
            $c = new TreeNode(3);
            $a->left = $b;
            $a->right = $c;
            $ibt = new InvertBinaryTree();
            $result = $ibt->invertTree($a);
            $this->assertEquals(1, $result->right->val);
        }
    }

}
