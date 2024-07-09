<?php

namespace LeetCode\Problems\AddTwoNumbers;

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class AddTwoNumbers
{
    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    public function addTwoNumbers($l1, $l2)
    {
        $a1 = $this->parseNode($l1);
        $a2 = $this->parseNode($l2);
        $max = count($a1) > count($a2) ? count($a1) : count($a2);
        $a3 = [];
        $oldCarry = $carry = 0;
        for ($i = 0; $i < $max; $i++) {
            $n1 = $a1[$i] ?? 0;
            $n2 = $a2[$i] ?? 0;
            $oldCarry = $carry;
            $carry = ($n1 + $n2 + $carry) > 9 ? 1 : 0;
            $a3[] = ($n1 + $n2 + $oldCarry) % 10;
        }
        if ($carry) {
            $a3[] = $carry;
        }
        $a3 = $this->createListNode($a3);
        return $a3;
    }

    /**
     * Function will traverse the ListNode and return array.
     * @param ListNode $ln
     * @return []
     */
    public function parseNode($ln)
    {
        $number = [];
        while($ln != null) {
            $number[] = $ln->val;
            $ln = $ln->next;
        }
        return array_reverse($number);
    }

    /**
     * Creates  ListNode from given array.
     * @param array
     * @param int
     * @return ListNode
     */
    public function createListNode($list, $index = 0)
    {
        if (isset($list[$index])) {
            $node = $this->createListNode($list, $index + 1);
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
