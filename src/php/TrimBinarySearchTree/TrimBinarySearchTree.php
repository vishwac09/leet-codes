<?php

/**
 * Autogenerated file for problem TrimBinarySearchTree
 */

namespace LeetCode\Problems\TrimBinarySearchTree;

class TrimBinarySearchTree
{
    /**
     * @param TreeNode $root
     * @param Integer $low
     * @param Integer $high
     * @return TreeNode
     */
    public function trimBST($root, $low, $high)
    {
        return $this->parseTree($root, $low, $high);
    }

    public function parseTree($root, $low, $high)
    {
        if (!$root) {
            return null;
        }
        $root->left = $this->parseTree($root->left, $low, $high);
        $root->right = $this->parseTree($root->right, $low, $high);
        if ($low && $root->val < $low) {
            if ($root->left) {
                return $root->left;
            } else {
                return $root->right;
            }
        }
        if ($high && $root->val > $high) {
            if ($root->left) {
                return $root->left;
            } else {
                return $root->right;
            }
        }
        return $root;
    }
}
