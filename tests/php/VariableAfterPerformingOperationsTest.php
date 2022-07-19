<?php

namespace LeetCode\Tests;

use LeetCode\Problems\VariableAfterPerformingOperations\VariableAfterPerformingOperations;
use PHPUnit\Framework\TestCase;
final class VariableAfterPerformingOperationsTest extends TestCase
{
	public function testVariableAfterPerformingOperationsTestExample1()
	{
		$vapo = new VariableAfterPerformingOperations();
		$this->assertEquals(1, $vapo->finalValueAfterOperations(["--X","X++","X++"]));
	}
}
