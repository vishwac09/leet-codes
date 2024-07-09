<?php

/**
 * Autogenerated file for problem ImplementStackQueues
 */

namespace LeetCode\Problems\ImplementStackQueues;

class ImplementStackQueues
{
    protected $stack;
    protected $count;

    /**
     * Default constructor
     */
    public function __construct()
    {
        $this->stack = [];
        $this->count = -1;
    }

    /**
     * @param Integer $x
     * @return NULL
     */
    public function push($x)
    {
        $this->stack[++$this->count] = $x;
    }

    /**
     * @return Integer
     */
    public function pop()
    {
        return $this->stack[$this->count--];
    }

    /**
     * @return Integer
     */
    public function top()
    {
        return $this->stack[$this->count];
    }

    /**
     * @return Boolean
     */
    public function empty()
    {
        return $this->count < 0;
    }
}
