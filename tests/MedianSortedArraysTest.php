<?php

namespace LeetCode\Tests;

use PHPUnit\Framework\TestCase;

use LeetCode\Problems\MedianSortedArrays\MedianSortedArrays;

final class MedianSortedArraysTest extends TestCase
{
    public function testMedianSortedArraysExample1()
    {
        $medianSorted = new MedianSortedArrays();
        $this->assertSame(2.00, $medianSorted->findMedianSortedArrays([1,3], [2]));
    }
}
