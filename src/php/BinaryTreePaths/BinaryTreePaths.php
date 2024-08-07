<?php

/**
 * Autogenerated file for problem BinaryTreePaths
 */

namespace LeetCode\Problems\BinaryTreePaths;

class BinaryTreePaths
{
    protected $path = [];
    protected $count = 0;
    /**
     * @param TreeNode $root
     * @return String[]
     */
    public function binaryTreePaths($root)
    {
        $this->parseTree($root, '');
        return $this->path;
    }

    public function parseTree($root, $path)
    {
        if (is_null($root->left) && is_null($root->right)) {
            $path .= $root->val;
            $this->path[$this->count++] = $path;
            return;
        }
        $path .= $root->val . '->';
        if (isset($root->left)) {
            $this->parseTree($root->left, $path);
        }
        if (isset($root->right)) {
            $this->parseTree($root->right, $path);
        }
    }
}
