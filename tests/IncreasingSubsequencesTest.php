<?php


namespace LeetCode\Tests;

use PHPUnit\Framework\TestCase;
use LeetCode\Problems\IncreasingSubsequences\IncreasingSubsequences;

class IncreasingSubsequencesTest extends TestCase
{
  public function testIncreasingSubsequencesExample1() {
    $is = new IncreasingSubsequences();
    $this->assertSame(2, $is->findSubsequences(2));
  }
}