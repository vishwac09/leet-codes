<?php

/**
 * Autogenerated file for problem ExcelSheetColumnNumber
 */

namespace LeetCode\Problems\ExcelSheetColumnNumber;

class ExcelSheetColumnNumber
{
    private const codes = [
        'A' => 1,
        'B' => 2,
        'C' => 3,
        'D' => 4,
        'E' => 5,
        'F' => 6,
        'G' => 7,
        'H' => 8,
        'I' => 9,
        'J' => 10,
        'K' => 11,
        'L' => 12,
        'M' => 13,
        'N' => 14,
        'O' => 15,
        'P' => 16,
        'Q' => 17,
        'R' => 18,
        'S' => 19,
        'T' => 20,
        'U' => 21,
        'V' => 22,
        'W' => 23,
        'X' => 24,
        'Y' => 25,
        'Z' => 26
    ];

    /**
     * @param String $columnTitle
     * @return Integer
     */
    public function titleToNumber($columnTitle)
    {
        if (strlen($columnTitle) == 1) {
            return self::codes[$columnTitle];
        }
        $answer = 0;
        $columnTitleLength = strlen($columnTitle);
        for ($i = 0; $i < $columnTitleLength; $i++) {
            $answer += self::codes[$columnTitle[$i]] * pow(26, $columnTitleLength - $i - 1);
        }
        return $answer;
    }
}
