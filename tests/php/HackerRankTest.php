<?php

namespace LeetCode\Tests;

use LeetCode\Problems\HackerRank\HackerRank;
use PHPUnit\Framework\TestCase;

final class HackerRankTest extends TestCase
{
    public function testHappyNumberTestExample1()
    {
        $hr = new HackerRank();
        $this->assertEquals(1, $hr->countingValleys(8, 'UDDDUDUU'));
        $this->assertEquals(2, $hr->countingValleys(12, 'DDUUDDUDUUUD'));
    }
}
