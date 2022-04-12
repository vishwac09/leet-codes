<?php

namespace LeetCode\Tests;

use LeetCode\Problems\SearchInsertPosition\SearchInsertPosition;
use PHPUnit\Framework\TestCase;

final class SearchInsertPositionTest extends TestCase
{
	public function testSearchInsertPositionExample1()
	{
        $sip = new SearchInsertPosition();
        $this->assertEquals(2, $sip->searchInsert([1,3,5,6], 5));
        $this->assertEquals(1, $sip->searchInsert([1,3,5,6], 2));
        $this->assertEquals(4, $sip->searchInsert([1,3,5,6], 7));
        $this->assertEquals(4, $sip->searchInsert([1,3,5,6], 10));
	}
}
