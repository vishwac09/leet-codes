<?php

namespace LeetCode\Problems\RegularExpressionMatching;

class RegularExpressionMatching
{
    /**
     * @param String $s
     * @param String $p
     * @return Boolean
     */
    function isMatch(string $s, string $p): bool
    {
        $pattern = '/' . $p . '/';
        return preg_match($pattern, $s);
    }
}