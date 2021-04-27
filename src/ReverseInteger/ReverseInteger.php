<?php

namespace Leetcode\Problems\ReverseInteger;

class ReverseInteger
{
  /**
   * @param Integer $x
   * @return Integer
   */
    public function reverse(int $x): int
    {
        if (!$x) {
            return 0;
        }
        $val = ltrim(strrev(strval($x)), 0);
        $parsedVal = (int) $val;
        if ($parsedVal > 2147483647) {
            return 0;
        }
        if ($x < 0) {
            return intval("-" . $val);
        }
        return $val;
    }
}
