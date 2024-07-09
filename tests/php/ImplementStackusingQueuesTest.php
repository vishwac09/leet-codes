<?php

namespace LeetCode\Tests;

use LeetCode\Problems\ImplementStackusingQueues\ImplementStackusingQueues;
use PHPUnit\Framework\TestCase;

final class ImplementStackusingQueuesTest extends TestCase
{
    public function testImplementStackusingQueuesTestExample1()
    {
        $isuq = new ImplementStackusingQueues();
        $isuq->push(1);
        $this->assertEquals(1, $isuq->top());
    }
}
