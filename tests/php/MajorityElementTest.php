<?php

namespace LeetCode\Tests;

use LeetCode\Problems\MajorityElement\MajorityElement;
use PHPUnit\Framework\TestCase;

final class MajorityElementTest extends TestCase
{
    public function testMajorityElementExample1()
    {
        $me = new MajorityElement();
        $this->assertEquals(3, $me->majorityElement([3,2,3]));
        $this->assertEquals(2, $me->majorityElement([2,2,1,1,1,2,2]));
    }
}
