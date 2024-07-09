<?php

namespace LeetCode\Tests;

use LeetCode\Problems\RemoveDuplicatesSortedList\RemoveDuplicatesSortedList;
use LeetCode\Problems\Helpers\ListNode;
use PHPUnit\Framework\TestCase;

final class RemoveDuplicatesSortedListTest extends TestCase
{
    public function testRemoveDuplicatesSortedListExample1()
    {
        $a = new ListNode(1, null);
        $b = new ListNode(2, $a);
        $c = new ListNode(2, $b);
        $rdsl = new RemoveDuplicatesSortedList();
        $s = $rdsl->deleteDuplicates($c);
        $this->assertEquals(2, $s->val);
        $this->assertEquals(1, $s->next->val);
        $this->assertNull($s->next->next);
        $a = new ListNode(1, null);
        $b = new ListNode(1, $a);
        $c = new ListNode(1, $b);
        $s = $rdsl->deleteDuplicates($c);
        $this->assertEquals(1, $s->val);
        $this->assertNull($s->next);
    }
}
