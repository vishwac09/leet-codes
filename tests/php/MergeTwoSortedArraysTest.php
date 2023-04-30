<?php

namespace LeetCode\Tests;

use LeetCode\Problems\MergeTwoSortedArrays\MergeTwoSortedArrays;
use PHPUnit\Framework\TestCase;

final class MergeTwoSortedArraysTest extends TestCase
{
    public function testMergeTwoSortedArraysExample1()
    {
        $a = new \LeetCode\Problems\AddTwoNumbers\ListNode(1, null);
        $b = new \LeetCode\Problems\AddTwoNumbers\ListNode(2, null);
        $mtsa = new MergeTwoSortedArrays();
        $s = $mtsa->mergeTwoLists($a, $b);
        $this->assertEquals(1, $s->val);
        $this->assertEquals(2, $s->next->val);
    }
}
