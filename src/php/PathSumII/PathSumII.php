<?php

/**
 * Autogenerated file for problem PathSumII
 */

namespace LeetCode\Problems\PathSumII;

class PathSumII
{
    protected $result =  [];

    /**
     * @param TreeNode $root
     * @param Integer $targetSum
     * @return Integer[][]
     */
    public function pathSum($root, $targetSum)
    {
        $this->parsePath($root, $targetSum, 0, []);
        return $this->result;
    }

    public function parsePath($root, $target, $sum, $path)
    {
        if (is_null($root)) {
            return [];
        }
        $sum += $root->val;
        $path[] = $root->val;
        $this->parsePath($root->left, $target, $sum, $path);
        $this->parsePath($root->right, $target, $sum, $path);
        if ($sum == $target && $root->left == null && $root->right == null) {
            $this->result[] = $path;
            return true;
        } else {
            return false;
        }
    }
}
