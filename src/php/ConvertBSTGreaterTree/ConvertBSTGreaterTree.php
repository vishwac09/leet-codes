<?php

/**
 * Autogenerated file for problem ConvertBSTGreaterTree
 */

namespace LeetCode\Problems\ConvertBSTGreaterTree;

class ConvertBSTGreaterTree
{
    protected $result =  [];

    /**
     * @param TreeNode $root
     * @return TreeNode
     */
    public function convertBST($root)
    {
        $this->parsePath($root);
        $this->parsePath($root, true);
        return $root;
    }

    public function parsePath(&$root, $add = false)
    {
        if (is_null($root)) {
            return;
        }
        $this->parsePath($root->left, $add);
        if (!$add) {
            $this->result[] = $root->val;
        } else {
            $key = array_search($root->val, $this->result);
            for ($i = ($key + 1);$i < count($this->result);$i++) {
                $root->val += $this->result[$i];
            }
        }
        $this->parsePath($root->right, $add);
    }
}
