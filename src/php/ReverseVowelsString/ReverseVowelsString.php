<?php

/**
 * Autogenerated file for problem ReverseVowelsString
 */

namespace LeetCode\Problems\ReverseVowelsString;

class ReverseVowelsString
{
    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s)
    {
        $strLength = strlen($s);
        if ($strLength === 1) {
            return $s;
        }
        $vowelsStack = [];
        $vowelsStackCount = 0;
        for ($i = 0; $i < $strLength; $i++) {
            if ($this->isVowel($s[$i])) {
                $vowelsStack[] = $s[$i];
                $vowelsStackCount++;
            }
        }
        for ($i = 0; $i < $strLength; $i++) {
            if ($this->isVowel($s[$i])) {
                $s[$i] = $vowelsStack[$vowelsStackCount - 1];
                $vowelsStackCount--;
            }
        }
        return $s;
    }

    /**
     * Check if the passed character is vowel or not.
     * 
     * @param String $ch
     * @return Bool
     */
    function isVowel($ch)
    {
        if (
            'A' == $ch || 'a' == $ch ||
            'E' == $ch || 'e' == $ch ||
            'I' == $ch || 'i' == $ch ||
            'O' == $ch || 'o' == $ch ||
            'U' == $ch || 'u' == $ch
        ) {
            return true;
        }
        return false;
    }
}
