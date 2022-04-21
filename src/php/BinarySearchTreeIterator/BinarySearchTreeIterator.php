<?php

namespace LeetCode\Problems\BinarySearchTreeIterator;

class BinarySearchTreeIterator
{
    protected $root;
    protected $stack;

    /**
     * @param TreeNode $root
     */
    function __construct($root) {
        $this->stack = [];
        $this->root = $root;
        $this->parseTree($root);
    }
    
    /**
     * @return Integer
     */
    function next() {
        $elem = array_pop($this->stack);
        $val = $elem->val;
        if ($elem->right) {
            $elem = $elem->right;
            while ($elem != null) {
                $this->stack[] = $elem;
                $elem = $elem->left;
            }
        }
        return $val;
    }
    
    /**
     * @return Boolean
     */
    function hasNext() {
        return count($this->stack) > 0;
    }
    
    function parseTree($root) {
        while ($root != null) {
            $this->stack[] = $root;
            $root = $root->left;
        }
    }
}
