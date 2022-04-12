<?php

namespace LeetCode\Tests;

use LeetCode\Problems\PlusOne\PlusOne;
use PHPUnit\Framework\TestCase;

final class PlusOneTest extends TestCase
{
	public function testPlusOneExample1()
	{
        $po = new PlusOne();
        $this->assertEquals([1,2,4], $po->plusOne([1,2,3]));
        $this->assertEquals([1,0], $po->plusOne([9]));
        $this->assertEquals([4,3,2,2], $po->plusOne([4,3,2,1]));
        $ip = [7,2,8,5,0,9,1,2,9,5,3,6,6,7,3,2,8,4,3,7,9,5,7,7,4,7,4,9,4,7,0,1,1,1,7,4,0,0,6];
        $op = [7,2,8,5,0,9,1,2,9,5,3,6,6,7,3,2,8,4,3,7,9,5,7,7,4,7,4,9,4,7,0,1,1,1,7,4,0,0,7];
        $this->assertEquals($op, $po->plusOne($ip));
	}
}
