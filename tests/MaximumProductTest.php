<?php

namespace LeetCode\Tests;

use PHPUnit\Framework\TestCase;
use LeetCode\Problems\MaximumProduct\MaximumProduct;

final class MaximumProductTest extends TestCase
{
  public function testMaximumProductExample1(): void
  {
    $mp = new MaximumProduct();
    $this->assertSame(34, $mp->maxProductDifference([5,6,2,7,4]));
  }
}
