<?php

/**
 * Autogenerated file for problem SearchSuggestionsSystem
 */

namespace LeetCode\Problems\SearchSuggestionsSystem;

class SearchSuggestionsSystem
{
    /**
     * @param String[] $products
     * @param String $searchWord
     * @return String[][]
     */
    public function suggestedProducts($products, $searchWord)
    {
        $length = strlen($searchWord);
        sort($products, SORT_STRING);
        $needle = '';
        $ret = [];
        for ($i = 0;$i < $length;$i++) {
            $needle .= $searchWord[$i];
            $searched = [];
            $count = 0;
            foreach  ($products as $value) {
                if (str_starts_with($value, $needle) &&  $count < 3) {
                    $searched[] = $value;
                    $count++;
                }
            }
            $ret[] = $searched;
        }
        return $ret;
    }
}
