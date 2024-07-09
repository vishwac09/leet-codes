<?php

namespace LeetCode\Tests;

use LeetCode\Problems\FirstUniqueCharacterString\FirstUniqueCharacterString;
use PHPUnit\Framework\TestCase;

final class FirstUniqueCharacterStringTest extends TestCase
{
    public function testFirstUniqueCharacterStringTestExample1()
    {
        $fucs = new FirstUniqueCharacterString();
        $this->assertEquals(0, $fucs->firstUniqChar('leetcode'));
        $this->assertEquals(2, $fucs->firstUniqChar('loveleetcode'));
        $this->assertEquals(-1, $fucs->firstUniqChar('aabb'));
        $this->assertEquals(0, $fucs->firstUniqChar('a'));
    }
}
