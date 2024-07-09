<?php

namespace LeetCode\Tests;

use LeetCode\Problems\GuessNumberHigherLower\GuessNumberHigherLower;
use PHPUnit\Framework\TestCase;

final class GuessNumberHigherLowerTest extends TestCase
{
    public function testGuessNumberHigherLowerTestExample1()
    {
        $gnhl = new GuessNumberHigherLower();
        $this->assertEquals(6, $gnhl->guessNumber(10));
    }
}
