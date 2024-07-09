<?php

namespace LeetCode\Tests;

use LeetCode\Problems\CombinationSumIII\CombinationSumIII;
use PHPUnit\Framework\TestCase;

final class CombinationSumIIITest extends TestCase
{
    public function testCombinationSumIIITestExample1()
    {
        $cst = new CombinationSumIII();
        $this->assertEquals([[1, 2, 4]], $cst->combinationSum3(3, 7));
    }
}
