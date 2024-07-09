<?php

namespace LeetCode\Problems\MergeTwoSortedArrays;

class MergeTwoSortedArrays
{
    /**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    public function mergeTwoLists($list1, $list2)
    {
        $ln1 = $this->parseNodes($list1);
        $ln2 = $this->parseNodes($list2);
        $ln1 = array_merge($ln1, $ln2);
        sort($ln1);
        return $this->createlist($ln1);
    }

    public function parseNodes($ln)
    {
        $parsedList = [];
        while ($ln != null) {
            $parsedList[] = $ln->val;
            $ln = $ln->next;
        }
        return $parsedList;
    }

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
