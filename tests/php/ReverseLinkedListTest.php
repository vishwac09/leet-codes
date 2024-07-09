<?php

namespace LeetCode\Tests;

use LeetCode\Problems\ReverseLinkedList\ReverseLinkedList;
use LeetCode\Problems\Helpers\ListNode;
use PHPUnit\Framework\TestCase;

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
