<?php

namespace LeetCode\Tests;

use LeetCode\Problems\ImplementStackQueues\ImplementStackQueues;
use PHPUnit\Framework\TestCase;


final class ImplementStackQueuesTest extends TestCase
{
	public function testImplementStackQueuesTestExample1()
	{
        $isq = new ImplementStackQueues();
        $isq->push(1);
        $this->assertEquals(1, $isq->top());
	}
}
