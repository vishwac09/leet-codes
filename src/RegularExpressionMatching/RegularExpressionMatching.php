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
        if (strlen($p) === 0) return (boolean) strlen($s);
        return true;
    }
}