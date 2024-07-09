<?php

namespace LeetCode\Problems\ZigZag;

class ZigZag
{
    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    public function convert(string $s, int $numRows): string
    {
        $totalChars = strlen($s);
        if ($totalChars <= $numRows) {
            return $s;
        }
        $mapper = null;
        $col = $pointer = 0;
        $mid = $numRows - 2;
        while ($totalChars > 0) {
            for ($i = 0; $i < $numRows; $i++) {
                $mapper[$i][$col] = $s[$pointer++] ?? null;
            }
            $col++;
            $totalChars -= $numRows;
            for ($j = 0; $j < $mid; $j++) {
                $mapper[($numRows - 1) - ($j + 1)][$col++] = $s[$pointer++] ?? null;
                $totalChars -= 1;
            }
        }
        $merged = array_merge(...$mapper);
        return str_replace(' ', '', implode('', $merged));
    }
}
