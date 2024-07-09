<?php

namespace LeetCode\Tests;

use LeetCode\Problems\OnesandZeroes\OnesandZeroes;
use PHPUnit\Framework\TestCase;

final class OnesandZeroesTest extends TestCase
{
    public function testOnesandZeroesTestExample1()
    {
        $oaz = new OnesandZeroes();
        $str = ["10","0001","111001","1","0"];
        $this->assertEquals(4, $oaz->findMaxForm($str, 5, 1));
    }
}
