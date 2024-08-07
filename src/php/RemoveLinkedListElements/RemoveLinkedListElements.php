<?php

/**
 * Autogenerated file for problem RemoveLinkedListElements
 */

namespace LeetCode\Problems\RemoveLinkedListElements;

use LeetCode\Problems\AddTwoNumbers\ListNode;

class RemoveLinkedListElements
{
    /**
     * @param ListNode $head
     * @param Integer $val
     * @return ListNode
     */
    public function removeElements($head, $val)
    {
        if ($head == null) {
            return null;
        }
        $prev = null;
        $top = $head;
        while ($head != null) {
            if ($head->val == $val) {
                if (is_null($prev)) {
                    $top = $head->next;
                } else {
                    $prev->next = $head->next;
                }
            } else {
                $prev = $head;
            }
            $head = $head->next;
        }
        return $top;
    }
}
