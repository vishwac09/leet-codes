<?php

namespace LeetCode\Tests;

use LeetCode\Problems\RemoveElement\RemoveElement;
use PHPUnit\Framework\TestCase;

final class RemoveElementTest extends TestCase
{
	public function testRemoveElementExample1()
	{
        $rdsat = new RemoveElement();
        $n1 = [1, 1, 2];
        $this->assertEquals(1, $rdsat->removeElement($n1, 1));
        $n2 = [0,0,1,1,1,2,2,3,3,4];
        $this->assertEquals(8, $rdsat->removeElement($n2, 0));
        $n3 = [1, 1];
        $this->assertEquals(0, $rdsat->removeElement($n3, 1));
        $n4 = [1];
        $this->assertEquals(1, $rdsat->removeElement($n4, 9));
        $n5 = [3,2,2,3];
        $this->assertEquals(2, $rdsat->removeElement($n5, 3));
        $n6 = [0,1,2,2,3,0,4,2];
        $this->assertEquals(5, $rdsat->removeElement($n6, 2));
	}
}
