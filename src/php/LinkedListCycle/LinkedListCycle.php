<?php

/**
 * Autogenerated file for problem LinkedListCycle
 */

namespace LeetCode\Problems\LinkedListCycle;

class LinkedListCycle
{
    /**
     * @param ListNode $head
     * @return Boolean
     */
    public function hasCycle($head)
    {
        $visited = [];
        $flag = false;
        while ($head != null) {
            $id = spl_object_id($head);
            if (!isset($visited[$id])) {
                $visited[$id] = true;
            } else {
                $flag = true;
                break;
            }
            $head = $head->next;
        }
        return $flag;
    }

    public function hasCycleA1($head)
    {
        $flag = false;
        while ($head->next != null) {
            if ($head->val == 'visited') {
                $flag = true;
                break;
            }
            $head->val = 'visited';
            $head = $head->next;
        }
        return $flag;
    }

    public function hasCycleA2($head)
    {
        if ($head === null) {
            return false;
        }

        $slow = $head;
        $quick = $head->next;
        while ($slow != $quick) {
            if ($quick === null || $quick->next === null) {
                return false;
            }
            $slow = $slow->next;
            $quick = $quick->next->next;
        }
        return true;
    }

}
