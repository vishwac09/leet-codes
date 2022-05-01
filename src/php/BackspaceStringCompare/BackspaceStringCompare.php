<?php

namespace LeetCode\Problems\BackspaceStringCompare;

class BackspaceStringCompare
{
    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function backspaceCompare($s, $t) {
        $s = $this->makeString($s);
        $t = $this->makeString($t);
        return $s === $t;
    }
    
    function makeString($str) {
        $length = strlen($str);
        $newS = '';
        $countS = 0;
        for ($i=0; $i<$length; $i++) {
            if ($str[$i] != '#') {
                $newS[$countS] = $str[$i];
                $countS++;
            } else {
                $countS--;
                $countS = $countS < 0 ? 0 : $countS;
                $newS = substr($newS, 0,  $countS);
            }
        }
        return $newS;
    }
}


