<?php

namespace LeetCode\Tests;

use LeetCode\Problems\MoveZeroes\MoveZeroes;
use PHPUnit\Framework\TestCase;
final class MoveZeroesTest extends TestCase
{
	public function testMoveZeroesTestExample1()
	{
		$mz = new MoveZeroes();
		$ip = [0,1,0,3,12];
		$this->assertEquals([1,3,12,0,0], $mz->moveZeroes($ip));
	}
}
