<?php

/**
 * Autogenerated test case file for problem CountSortedVowelStringsTest
 */

use LeetCode\Problems\CountSortedVowelStrings\CountSortedVowelStrings;
use PHPUnit\Framework\TestCase;

final class CountSortedVowelStringsTest extends TestCase
{
    public function testCountSortedVowelStringsTestExample1()
    {
        $cvs = new CountSortedVowelStrings();
        $this->assertEquals(15, $cvs->countVowelStrings(2));
        $this->assertEquals(5, $cvs->countVowelStrings(1));
    }
}
