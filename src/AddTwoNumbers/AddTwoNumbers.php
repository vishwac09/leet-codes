<?php

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
class Solution
{

  /**
   * @param ListNode $l1
   * @param ListNode $l2
   * @return ListNode
   */
    function addTwoNumbers($l1, $l2)
    {
        $a = [];
        $b = [];
        while ($l1 || $l2) {
            $a[] = $l1->val ?? 0;
            $b[] = $l2->val ?? 0;
            $l1 = $l1->next ?? null;
            $l2 = $l2->next ?? null;
        }
        $carry = -1;
        if (count($a) > count($b)) {
            $largerArray = $a;
            $smaller = $b;
        } else {
            $largerArray = $b;
            $smaller = $a;
        }
        $li = null;
        $start = null;
        foreach ($largerArray as $key => $value) {
            $sum = $value + (!empty($smaller[$key]) ? $smaller[$key] : 0) + $carry;
            if ($sum >= 10) {
                $carry = (int)$sum/10;
                $sum = $sum%10;
            }
            if (!isset($li)) {
                $li = new ListNode($sum, null);
                $start = $li;
            } else {
                $li->next = new ListNode($sum, null);
                $li = $li->next;
            }
        }
        if ($carry > 0) {
            $li->next = new ListNode($sum, null);
            $li = $li->next;
        }
        return $start;
    }
}

class ListNode
{
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

// 7->3->2->1
$a = new ListNode(3, null);
$b = new ListNode(4, $a);
$c = new ListNode(1, $b);

// 6->5->4
$p = new ListNode(4, null);
$q = new ListNode(6, $p);
$r = new ListNode(5, $q);

$s = new Solution();
print_r($s->addTwoNumbers($c, $r));

//1 2 3 7
//4 5 6

//5 7 9 7
