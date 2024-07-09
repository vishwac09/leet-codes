<?php

namespace LeetCode\Tests;

use LeetCode\Problems\MergekSortedLists\MergekSortedLists;
use LeetCode\Problems\Helpers\ListNode;
use PHPUnit\Framework\TestCase;

final class MergekSortedListsTest extends TestCase
{
    public function testMergekSortedListsTestExample1()
    {
        $mksl = new MergekSortedLists();
        $a = new ListNode(2);
        $b = new ListNode(1);
        $c = new ListNode(3);
        $result = $mksl->mergeKLists([$a, $b, $c]);
        $this->assertEquals(1, $result->val);
    }
}
