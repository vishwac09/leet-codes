<?php

namespace LeetCode\Problems\BinaryTreeInorderTraversal;

class BinaryTreeInorderTraversal
{
    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function inorderTraversal($root) {
        if (!$root) {
            return [];
        }
        return $this->parseTree($root);
    }
    
    function parseTree($node = null) {
        $ret = [];
        // Get the Left childs
        if (isset($node->left)) {
            $temp = $this->parseTree($node->left);
            $ret = array_merge($ret, $temp);
        }
        if (isset($node)) {
            $ret[] = $node->val;
        }
        if (isset($node->right)) {
            $temp = $this->parseTree($node->right);
            $ret = array_merge($ret, $temp);
        }
        return $ret;
    }
}
