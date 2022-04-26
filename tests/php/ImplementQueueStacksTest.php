<?php

namespace LeetCode\Tests;

use LeetCode\Problems\ImplementQueueStacks\ImplementQueueStacks;
use PHPUnit\Framework\TestCase;

final class ImplementQueueStacksTest extends TestCase
{
	public function testImplementQueueStacksTestExample1()
	{
        $iqs = new ImplementQueueStacks();
        $iqs->push(1);
        $iqs->push(2);
        $this->assertEquals(1, $iqs->peek());
	}
}
