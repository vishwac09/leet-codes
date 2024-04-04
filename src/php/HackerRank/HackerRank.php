<?php

namespace LeetCode\Problems\HackerRank;

class HackerRank
{
    public function countingValleys($steps, $path)
    {
        // Write your code here
        $initial_position = 0;
        $valley_started = false;
        $total_valleys = 0;
        for ($i = 0; $i < $steps; $i++) {
            $initial_position = $path[$i] === 'D' ? $initial_position - 1 : $initial_position + 1;
            if ($initial_position < 0) {
                $valley_started = true;
            }
            if ($valley_started && $initial_position === 0) {
                $valley_started = false;
                $total_valleys += 1;
            }
        }
        return $total_valleys;
    }
}

// echo countingValleys(8, 'UDDDUDUU') . PHP_EOL;
// echo countingValleys(12, 'DDUUDDUDUUUD') . PHP_EOL;
