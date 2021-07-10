<?php

namespace LeetCode\Tests;

use PHPUnit\Framework\TestCase;
use LeetCode\Problems\NumberComplement\NumberComplement;

final class NumberComplementTest extends TestCase
{
  public function testNumberComplementExample1()
  {
    $nc = new NumberComplement();
    $this->assertSame(2, $nc->findComplement(5));
    $this->assertSame(13393220, $nc->findComplement(20161211));
  }
}
