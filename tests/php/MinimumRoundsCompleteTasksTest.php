<?php

/**
 * Autogenerated test case file for problem MinimumRoundsCompleteTasksTest
 */
namespace LeetCode\Tests;


use LeetCode\Problems\MinimumRoundsCompleteTasks\MinimumRoundsCompleteTasks;
use PHPUnit\Framework\TestCase;

final class MinimumRoundsCompleteTasksTest extends TestCase
{
	public function testMinimumRoundsCompleteTasksTestExample1()
	{
		$mrct = new MinimumRoundsCompleteTasks();
		$task = [2,2,3,3,2,4,4,4,4,4];
		$this->assertEquals(4, $mrct->minimumRounds($task));
	}
}