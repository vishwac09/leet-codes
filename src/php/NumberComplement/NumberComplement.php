<?php

namespace LeetCode\Problems\NumberComplement;

class NumberComplement
{
    /**
     * @param Integer $num
     * @return Integer
     */
    public function findComplement($num)
    {
        $numBin = decbin($num);
        $numCompliment = '';
        for ($i = 0; $i < strlen($numBin); $i++) {
            $numCompliment[$i] = $numBin[$i] === '0' ? '1' : '0';
        }
        return bindec($numCompliment);
    }
}
