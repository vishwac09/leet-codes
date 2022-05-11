<?php

namespace LeetCode\Tests;

use LeetCode\Problems\LetterCombinationsPhoneNumber\LetterCombinationsPhoneNumber;
use PHPUnit\Framework\TestCase;
final class LetterCombinationsPhoneNumberTest extends TestCase
{
	public function testLetterCombinationsPhoneNumberTestExample1()
	{
        $lcp = new LetterCombinationsPhoneNumber();
        $res = ["ad","ae","af","bd","be","bf","cd","ce","cf"];
        $this->assertEquals($res, $lcp->letterCombinations('23'));
	}
}
