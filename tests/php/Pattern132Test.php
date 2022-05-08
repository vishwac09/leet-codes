<?php

namespace LeetCode\Tests;

use LeetCode\Problems\Pattern132\Pattern132;
use PHPUnit\Framework\TestCase;
final class Pattern132Test extends TestCase
{
	public function testPattern132TestExample1()
	{
        $p = new Pattern132();
        $this->assertEquals(false, $p->find132pattern([1,2,3,4]));
        $this->assertEquals(true, $p->find132pattern([3,1,4,2]));
        $this->assertEquals(false, $p->find132patternOpt([1,2,3,4]));
        $this->assertEquals(true, $p->find132patternOpt([3,1,4,2]));
        $this->assertEquals(false, $p->find132patternOptt([1,2,3,4]));
        $this->assertEquals(true, $p->find132patternOptt([3,1,4,2]));
	}
}
