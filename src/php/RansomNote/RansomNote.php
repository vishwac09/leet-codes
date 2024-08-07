<?php

/**
 * Autogenerated file for problem RansomNote
 */

namespace LeetCode\Problems\RansomNote;

class RansomNote
{
    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    public function canConstruct($ransomNote, $magazine)
    {
        $stat = false;
        for($i = 0; $i < strlen($ransomNote); $i++) {
            $index = strpos($magazine, $ransomNote[$i]);
            if ($index !== false) {
                $stat = true;
                $magazine[$index] = 1;
            } else {
                $stat = false;
                break;
            }
        }
        return $stat;
    }
}
