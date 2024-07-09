<?php

namespace LeetCode\Tests;

use LeetCode\Problems\PeekingIterator\PeekingIterator;
use PHPUnit\Framework\TestCase;

final class PeekingIteratorTest extends TestCase
{
    public function testPeekingIteratorTestExample1()
    {
        $a = [1,2,3];
        $no = new \ArrayObject($a);
        $itr = $no->getIterator();
        $pi = new PeekingIterator($itr);
        $this->assertEquals(1, $pi->next());
        $this->assertEquals(true, $pi->hasNext());
        $this->assertEquals(2, $pi->peek());
        $this->assertEquals(2, $pi->next());
    }
}
