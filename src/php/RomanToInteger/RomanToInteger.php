<?php

/**
 * Autogenerated file for problem RomanToInteger
 */

namespace LeetCode\Problems\RomanToInteger;

class RomanToInteger
{
    /**
     * @param String $s
     * @return Integer
     */
    public function romanToIntOld($s)
    {
        $len = strlen($s);
        $i = 0;
        $result = 0;
        while ($i < $len) {

            if (isset($s[$i + 1]) && ($this->romanToDecimal($s[$i]) < $this->romanToDecimal($s[$i + 1]))) {
                $result += ($this->romanToDecimal($s[$i + 1]) - $this->romanToDecimal($s[$i]));
                $i = $i + 2;
            } else {
                $result += $this->romanToDecimal($s[$i]);
                $i++;
            }

        }
        return $result;
    }

    /**
     * @param String $s
     * @return Integer
     */
    public function romanToInt($s)
    {
        $len = strlen($s);
        $i = 0;
        $result = 0;
        while ($i < $len) {
            if (isset($s[$i + 1]) && $this->romanToDecimal($s[$i]) < $this->romanToDecimal($s[$i + 1])) {
                $result += $this->romanToDecimal($s[$i + 1]) - $this->romanToDecimal($s[$i]);
                $i++;
            } else {
                $result += $this->romanToDecimal($s[$i]);
            }
            $i++;
        }
        return $result;
    }

    /**
     * Converts roman characters to decimal.
     * @param String $char
     * @return int
     */
    public function romanToDecimal($char)
    {
        return match ($char) {
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        };
    }
}
