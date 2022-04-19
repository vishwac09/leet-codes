<?php

namespace LeetCode\Tests;

use LeetCode\Problems\RemoveNNodeEndList\RemoveNNodeEndList;
use LeetCode\Tests\Helpers\ListNode;
use PHPUnit\Framework\TestCase;

final class RemoveNNodeEndListTest extends TestCase
{
	public function testRemoveNNodeEndListTestExample1()
	{
        $rnnnel = new RemoveNNodeEndList();
        $a = new ListNode(1);
        $b = new ListNode(2);
        $c = new ListNode(3);
        $d = new ListNode(4);
        $e = new ListNode(5);
        $a->next = $b;
        $b->next = $c;
        $c->next = $d;
        $d->next = $e;
        $result = $rnnnel->removeNthFromEnd($a, 3);
        $this->assertEquals(1, $result->val);
        $r = new ListNode(1);
        $result = $rnnnel->removeNthFromEnd($r, 1);
        $this->assertEquals(null, $result);
	}
}
