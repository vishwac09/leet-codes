<?php

namespace LeetCode\Tests;

use LeetCode\Problems\LinkedListCycle\LinkedListCycle;
use LeetCode\Problems\Helpers\ListNode;
use PHPUnit\Framework\TestCase;

final class LinkedListCycleTest extends TestCase
{
    public function testLinkedListCycleExample1()
    {
        $llc = new LinkedListCycle();
        $a = new ListNode(3, null);
        $b = new ListNode(2, null);
        $c = new ListNode(0, null);
        $d = new ListNode(4, null);
        $a->next = $b;
        $b->next = $c;
        $c->next = $d;
        $d->next = $b;
        $this->assertEquals(true, $llc->hasCycle($a));
        $this->assertEquals(true, $llc->hasCycleA2($a));
        $p = new ListNode(1, null);
        $q = new ListNode(2, null);
        $p->next = $q;
        $q->next = null;
        $this->assertEquals(false, $llc->hasCycle($p));
        $this->assertEquals(false, $llc->hasCycleA2($p));
    }
}
