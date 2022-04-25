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
    function __construct() {
        $this->stack = [];
        $this->count = -1;
    }
    
    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        $this->stack[++$this->count] = $x;
    }
    
    /**
     * @return Integer
     */
    function pop() {
        return $this->stack[$this->count--];
    }
    
    /**
     * @return Integer
     */
    function top() {
        return $this->stack[$this->count];
    }
    
    /**
     * @return Boolean
     */
    function empty() {
        return $this->count < 0;
    }
}