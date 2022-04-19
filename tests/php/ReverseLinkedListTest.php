<?php

namespace LeetCode\Tests;

use LeetCode\Problems\ReverseLinkedList\ReverseLinkedList;
use PHPUnit\Framework\TestCase;
use LeetCode\Tests\Helpers\ListNode;

final class ReverseLinkedListTest extends TestCase
{
	public function testReverseLinkedListTestExample1()
	{
        $rll = new ReverseLinkedList();
        $a = new ListNode(1);
        $b = new ListNode(2, $a);
        $this->assertEquals(1, ($rll->reverseList($b))->val);
	}
}
