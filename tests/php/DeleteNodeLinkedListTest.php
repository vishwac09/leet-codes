<?php

namespace LeetCode\Tests;

use LeetCode\Problems\DeleteNodeLinkedList\DeleteNodeLinkedList;
use LeetCode\Problems\Helpers\ListNode;
use PHPUnit\Framework\TestCase;

final class DeleteNodeLinkedListTest extends TestCase
{
	public function testDeleteNodeLinkedListTestExample1()
	{
        $a = new ListNode(4);
        $b = new ListNode(5);
        $c = new ListNode(1);
        $d = new ListNode(9);
        $a->next = $b;
        $b->next = $c;
        $c->next = $d;
        $dnll = new DeleteNodeLinkedList($a);
        $res = $dnll->deleteNode($b);
        $this->assertEquals(4, $res->val);
	}
}
