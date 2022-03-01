<?php

namespace LeetCode\Problems\DiceRollsTarget;

class DiceRollsTarget
{
  /**
   * @param Integer $d
   * @param Integer $f
   * @param Integer $target
   * @return Integer
   */
  public function numRollsToTarget(int $d, int $f, int $target): int
  {
    if ($target > $f) {
      return 0;
    }
    if ($d === 1 && $target <= $f) {
      return 1;
    }
    for ($i = 0; $i < $d; $i++) {
    
    }
  }
}
