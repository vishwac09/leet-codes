<?php

namespace LeetCode\Tests;

use LeetCode\Problems\RemoveLinkedListElements\RemoveLinkedListElements;
use LeetCode\Problems\Helpers\ListNode;
use PHPUnit\Framework\TestCase;

final class RemoveLinkedListElementsTest extends TestCase
{
	public function testRemoveLinkedListElementsTestExample1()
	{
        $a = new ListNode(1);
        $b = new ListNode(2);
        $c = new ListNode(6);
        $d = new ListNode(3);
        $e = new ListNode(4);
        $f = new ListNode(5);
        $g = new ListNode(6);
        $a->next = $b;
        $b->next = $c;
        $c->next = $d;
        $d->next = $e;
        $e->next = $f;
        $f->next = $g;
        $rlle = new RemoveLinkedListElements();
        $result = $rlle->removeElements($a, 6);
        $this->assertEquals(1, $result->val);
        $p = new ListNode(7);
        $q = new ListNode(7);
        $r = new ListNode(7);
        $s = new ListNode(7);
        $p->next = $q;
        $q->next = $r;
        $r->next = $s;
        $res = $rlle->removeElements($p, 7);
        $this->assertEquals(null, $res);
	}
}
