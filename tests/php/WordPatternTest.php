<?php

namespace LeetCode\Tests;

use LeetCode\Problems\WordPattern\WordPattern;
use PHPUnit\Framework\TestCase;

final class WordPatternTest extends TestCase
{
    public function testWordPatternTestExample1()
    {
        $wp = new WordPattern();
        $this->assertEquals(true, $wp->wordPattern("abba", "dog cat cat dog"));
        $this->assertEquals(false, $wp->wordPattern("abba", "dog cat cat fish"));
        $this->assertEquals(false, $wp->wordPattern("aaaa", "dog cat cat dog"));
        $this->assertEquals(true, $wp->wordPattern("a", "a"));
        $this->assertEquals(false, $wp->wordPattern("jquery", "jquery"));
        // $this->assertEquals(false, $wp->wordPattern("abba", "dog dog dog dog"));
    }
}
