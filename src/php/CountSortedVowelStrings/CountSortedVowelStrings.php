<?php

/**
 * Autogenerated file for problem CountSortedVowelStrings
 */

namespace LeetCode\Problems\CountSortedVowelStrings;

class CountSortedVowelStrings
{
    protected $count = 0;
    protected $str = "aeiou";
    protected $rest = [];
    /**
     * @param Integer $n
     * @return Integer
     */
    function countVowelStrings($n) {
        if ($n == 1) {
            return 5;
        }
        $this->vowels($n, 0, '');
        print_r($this->rest);die;
        return $this->count;
    }
    
    function vowels($n, $start, $char) {
        if ($n == 0) {
            $this->rest[] = $char;
            $this->count++;
            return;
        }
        $n = $n - 1;
        for ($i=$start; $i<5; $i++) {
            $char .= $this->str[$i];
            $this->vowels($n, $i, $char);
        }
    }
}
