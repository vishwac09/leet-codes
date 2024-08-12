<?php

/**
 * Autogenerated file for problem CountCompleteTreeNode
 */

namespace LeetCode\Problems\CountCompleteTreeNode;

use LeetCode\Problems\Helpers\TreeNode;

class CountCompleteTreeNode
{
    /**
     * @param TreeNode $root
     * @return Integer
     */
    public function countNodes(TreeNode $root)
    {
        if ($root === null) {
            return 0;
        }
        return $this->parseTree($root, 1);
    }

    /**
     * @param TreeNode $tree
     */
    public function parseTree(TreeNode $tree = null, $count = 0)
    {
        $lc = 0;
        if (isset($tree->left)) {
            $lc += $this->parseTree($tree->left);
        }
        $lc += 1;
        if (isset($tree->right)) {
            $lc += $this->parseTree($tree->right);
        }
        return $lc;
    }
}