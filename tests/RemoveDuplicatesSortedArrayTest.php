<?php

namespace LeetCode\Tests;

use LeetCode\Problems\RemoveDuplicatesSortedArray\RemoveDuplicatesSortedArray;
use PHPUnit\Framework\TestCase;

final class RemoveDuplicatesSortedArrayTest extends TestCase
{
	public function testRemoveDuplicatesSortedArrayExample1()
	{
        $rdsat = new RemoveDuplicatesSortedArray();
        $n1 = [1, 1, 2];
        $this->assertEquals(2, $rdsat->removeDuplicates($n1));
        $n2 = [0,0,1,1,1,2,2,3,3,4];
        $this->assertEquals(5, $rdsat->removeDuplicates($n2));
        $n3 = [1, 1];
        $this->assertEquals(1, $rdsat->removeDuplicates($n3));
        $n4 = [1];
        $this->assertEquals(1, $rdsat->removeDuplicates($n4));
	}
}
