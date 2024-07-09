<?php

namespace LeetCode\Tests;

use LeetCode\Problems\IsomorphicStrings\IsomorphicStrings;
use PHPUnit\Framework\TestCase;

final class IsomorphicStringsTest extends TestCase
{
    public function testIsomorphicStringsTestExample1()
    {
        $is = new IsomorphicStrings();
        $this->assertEquals(true, $is->isIsomorphic('egg', 'add'));
        $this->assertEquals(false, $is->isIsomorphic('bada', 'baba'));
        $this->assertEquals(false, $is->isIsomorphic('foo', 'bar'));
        $this->assertEquals(true, $is->isIsomorphic('paper', 'title'));
        $this->assertEquals(false, $is->isIsomorphic('aaeaa', 'uuxyy'));
    }
}
