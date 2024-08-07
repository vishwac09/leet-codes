<?php

/**
 * Autogenerated file for problem ReverseLinkedList
 */

namespace LeetCode\Problems\ReverseLinkedList;

use LeetCode\Problems\Helpers\ListNode;

class ReverseLinkedList
{
    /**
     * @param ListNode $head
     * @return ListNode
     */
    public function reverseList($head)
    {
        if (!$head) {
            return null;
        }
        $elem = [];
        while ($head != null) {
            $elem[] = $head->val;
            $head = $head->next;
        }
        $elem = array_reverse($elem);
        return $this->createListNode($elem);
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
