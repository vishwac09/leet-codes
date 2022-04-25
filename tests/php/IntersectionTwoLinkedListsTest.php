<?php

/**
 * Autogenerated test case file for problem IntersectionTwoLinkedListsTest
 */

use LeetCode\Problems\IntersectionTwoLinkedLists\IntersectionTwoLinkedLists;
use PHPUnit\Framework\TestCase;
use LeetCode\Tests\Helpers\ListNode;

final class IntersectionTwoLinkedListsTest extends TestCase
{
	public function testIntersectionTwoLinkedListsTestExample1()
	{
        $a = new ListNode(1);
        $b = new ListNode(2);
        $a->next = $b;
        $c = new ListNode(3);
        $b->next = $c;
        $d = new ListNode(4);
        $d->next = $b;
        $itl = new IntersectionTwoLinkedLists();
        $this->assertEquals(new ListNode(2, $c), $itl->getIntersectionNode($a, $d));
	}
}
