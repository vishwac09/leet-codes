<?php

namespace LeetCode\Tests;

use LeetCode\Problems\RichestCustomerWealth\RichestCustomerWealth;
use PHPUnit\Framework\TestCase;

final class RichestCustomerWealthTest extends TestCase
{
    public function testRichestCustomerWealthTestExample1()
    {
        $rcw = new RichestCustomerWealth();
        $accounts = [[1,2,3],[3,2,1]];
        $this->assertEquals(6, $rcw->maximumWealth($accounts));
        $this->assertEquals(10, $rcw->maximumWealth([[1,5],[7,3],[3,5]]));
    }
}
