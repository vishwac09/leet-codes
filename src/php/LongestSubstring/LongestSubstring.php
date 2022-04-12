<?php

namespace LeetCode\Problems\LongestSubstring;

class LongestSubstring
{
    
    /**
     * @param String $s
     * @return Integer
     */
    public function lengthOfLongestSubstring(string $s): int
    {
        $max = 0;
        $length = strlen($s);
        if (!$length) {
            return $max;
        }
        for ($i=0; $i<$length; $i++) {
            $subString = $s[$i];
            $j = $i + 1;
            while (!empty($s[$j]) && strpos($subString, $s[$j]) === false) {
                $subString .= $s[$j];
                $j++;
            }
            $max = $max > strlen($subString) ? $max : strlen($subString);
        }
        return $max;
    }
}
