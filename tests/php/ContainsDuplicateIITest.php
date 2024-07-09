<?php

namespace LeetCode\Tests;

use LeetCode\Problems\ContainsDuplicateII\ContainsDuplicateII;
use PHPUnit\Framework\TestCase;

final class ContainsDuplicateIITest extends TestCase
{
    public function testContainsDuplicateIITestExample1()
    {
        $cd = new ContainsDuplicateII();
        $this->assertEquals(true, $cd->containsNearbyDuplicate([1, 2, 3, 1], 3));
        $this->assertEquals(true, $cd->containsNearbyDuplicate([1, 0, 1, 1], 1));
        $this->assertEquals(false, $cd->containsNearbyDuplicate([1, 2, 3, 1, 2, 3], 2));
    }
}
