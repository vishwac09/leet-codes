<?php

/**
 * Autogenerated file for problem SymmetricTree
 */

namespace LeetCode\Problems\SymmetricTree;

class SymmetricTree
{
    /**
     * @param TreeNode $root
     * @return Boolean
     */
    public function isSymmetric($root)
    {
        if (is_null($root)) {
            return false;
        }
        return $this->parseTree($root->left, $root->right);
    }

    public function parseTree($a, $b)
    {
        if (is_null($a) && is_null($b)) {
            return true;
        }
        if (is_null($a) || is_null($b)) {
            return false;
        }
        return ($a->val == $b->val) && $this->parseTree($a->left, $b->right)
            && $this->parseTree($a->right, $b->left);
    }
}
