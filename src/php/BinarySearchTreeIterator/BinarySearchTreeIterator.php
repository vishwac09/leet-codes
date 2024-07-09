<?php

namespace LeetCode\Problems\BinarySearchTreeIterator;

class BinarySearchTreeIterator
{
    protected $root;
    protected $stack;

    /**
     * @param TreeNode $root
     */
    public function __construct($root)
    {
        $this->stack = [];
        $this->root = $root;
        $this->parseTree($root);
    }

    /**
     * @return Integer
     */
    public function next()
    {
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
    public function hasNext()
    {
        return count($this->stack) > 0;
    }

    public function parseTree($root)
    {
        while ($root != null) {
            $this->stack[] = $root;
            $root = $root->left;
        }
    }
}
