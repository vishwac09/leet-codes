<?php

namespace LeetCode\Tests;

use LeetCode\Problems\PathMinimumEffort\PathMinimumEffort;
use PHPUnit\Framework\TestCase;

final class PathMinimumEffortTest extends TestCase
{
	public function testPathMinimumEffortTestExample1()
	{
        $height = [[1,2,2],[3,8,2],[5,3,5]];
        $pme = new PathMinimumEffort();
        $effort = $pme->minimumEffortPath($height);
        echo PHP_EOL . $effort . PHP_EOL;
        die;
	}
}
