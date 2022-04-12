<?php

namespace LeetCode\Tests;

use LeetCode\Problems\MergeSortedArray\MergeSortedArray;
use PHPUnit\Framework\TestCase;

final class MergeSortedArrayTest extends TestCase
{
	public function testMergeSortedArrayExample1()
	{
        $msa = new MergeSortedArray();
        $n1 = [1];
        $msa->merge($n1, 1, [], 0);
        $this->assertEquals([1], $n1);
        $n2 = [1,2,3,0,0,0];
        $msa->merge($n2, 3, [2,5,6], 3);
        $this->assertEquals([1,2,2,3,5,6], $n2);
        $n3 = [];
        $msa->merge($n3, 0, [], 0);
        $this->assertEquals([], $n3);
        $n4 = [0];
        $msa->merge($n4, 0, [1], 1);
        $this->assertEquals([1], $n4);
	}
}
