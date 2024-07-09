<?php

namespace LeetCode\Problems\RemoveDuplicatesSortedList;

class RemoveDuplicatesSortedList
{
    /**
     * @param ListNode $head
     * @return ListNode
     */
    public function deleteDuplicates($head)
    {
        $a = $this->parseNodes($head);
        return $this->createlist($a);
    }

    /**
     * @param $ln
     * @return array
     */
    public function parseNodes($ln)
    {
        $number = [];
        while($ln != null) {
            if (!in_array($ln->val, $number)) {
                $number[] = $ln->val;
            }
            $ln = $ln->next;
        }
        return $number;
    }

    /**
     * @param $list
     * @param int $index
     * @return ListNode|null
     */
    public function createlist($list, $index = 0)
    {
        if (isset($list[$index])) {
            $node = $this->createlist($list, $index + 1);
            return new ListNode($list[$index], $node);
        }
        return null;
    }
}

class ListNode
{
    public $val = 0;
    public $next = null;
    public function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}
