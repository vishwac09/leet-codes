<?php

namespace LeetCode\Problems\PalindromeNumber;

class PalindromeNumber
{
  /**
   * @param Integer $x
   * @return Boolean
   */
    public function isPalindrome(int $x): bool
    {
        if ($x <= 0 || $x > 2147483647 || $x < -2147483647) {
            return false;
        }
        $res = 0;
        $copiedX = $x;
        while ($copiedX > 0) {
            $res = ($res*10) + ($copiedX % 10);
            $copiedX = floor($copiedX / 10);
        }
        return $res === $x;
    }
}
