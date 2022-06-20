<?php

namespace LeetCode\Tests;

use LeetCode\Problems\SearchSuggestionsSystem\SearchSuggestionsSystem;
use PHPUnit\Framework\TestCase;
final class SearchSuggestionsSystemTest extends TestCase
{
	public function testSearchSuggestionsSystemTestExample1()
	{
		$sss = new SearchSuggestionsSystem();
		$op = $sss->suggestedProducts(["havana"], "havana");
		$this->assertEquals($op, [["havana"],["havana"],["havana"],["havana"],["havana"],["havana"]]);
		$opp = $sss->suggestedProducts(["mobile","mouse","moneypot","monitor","mousepad"], "mouse");
		$this->assertEquals($opp, [
			["mobile","moneypot","monitor"],
			["mobile","moneypot","monitor"],
			["mouse","mousepad"],
			["mouse","mousepad"],
			["mouse","mousepad"]
			]); 
	}
}
