<?php

namespace LeetCode\Tests;

use LeetCode\Problems\SingleNumber\SingleNumber;
use PHPUnit\Framework\TestCase;

final class SingleNumberTest extends TestCase
{
    public function testSingleNumberExample1()
    {
        $sn = new SingleNumber();
        $this->assertEquals(1, $sn->singleNumber([1,2,2]));
        $this->assertEquals(4, $sn->singleNumber([4,1,2,1,2]));
    }
}
