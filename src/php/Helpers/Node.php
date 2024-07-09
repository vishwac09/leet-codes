<?php

namespace LeetCode\Problems\Helpers;

class Node
{
    public $val = null;
    public $left = null;
    public $right = null;
    public $next = null;
    public function __construct($val = 0)
    {
        $this->val = $val;
        $this->left = null;
        $this->right = null;
        $this->next = null;
    }
}
