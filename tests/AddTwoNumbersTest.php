<?php

namespace LeetCode\Tests;

use PHPUnit\Framework\TestCase;
use LeetCode\Problems\AddTwoNumbers\AddTwoNumbers;
use LeetCode\Problems\AddTwoNumbers\ListNode;

final class AddTwoNumbersTest extends TestCase
{
    public function testAddTwoNumbersExample1(): void
    {
        $addTwoNumbers = new AddTwoNumbers();
        $l1 = new ListNode(1, null);
        $l2 = new ListNode(6, null);
        $l3 = $addTwoNumbers->addTwoNumbers($l1, $l2);
        $this->assertSame(7, $l3->val);
        $this->assertNotSame(1, $l3->val);
    }
}
