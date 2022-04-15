<?php

namespace LeetCode\Tests;

use LeetCode\Problems\BestTimeBuySellStock\BestTimeBuySellStock;
use PHPUnit\Framework\TestCase;

final class BestTimeBuySellStockTest extends TestCase
{
	public function testBestTimeBuySellStockExample1()
	{
        $btbs = new BestTimeBuySellStock();
        $this->assertEquals(5, $btbs->maxProfit([7,1,5,3,6,4]));
        $this->assertEquals(0, $btbs->maxProfit([7,6,4,3,1]));
        $this->assertEquals(2, $btbs->maxProfit([2,4,1]));
	}
}
