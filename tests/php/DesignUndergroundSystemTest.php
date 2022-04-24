<?php

namespace LeetCode\Tests;

use LeetCode\Problems\DesignUndergroundSystem\DesignUndergroundSystem;
use PHPUnit\Framework\TestCase;


final class DesignUndergroundSystemTest extends TestCase
{
	public function testDesignUndergroundSystemTestExample1()
	{
        $dus = new DesignUndergroundSystem();
        $dus->checkIn(1, 'Pune', 8);
        $dus->checkOut(1, 'Lonavla', 12);
        $dus->checkIn(1, 'Pune', 8);
        $dus->checkOut(1, 'Lonavla', 16);
        $this->assertEquals(6, $dus->getAverageTime('Pune' , 'Lonavla'));
	}
}
