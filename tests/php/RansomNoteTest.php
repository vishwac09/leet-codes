<?php

namespace LeetCode\Tests;

use LeetCode\Problems\RansomNote\RansomNote;
use PHPUnit\Framework\TestCase;

final class RansomNoteTest extends TestCase
{
    public function testRansomNoteTestExample1()
    {
        $rn = new RansomNote();
        $this->assertEquals(false, $rn->canConstruct('a', 'b'));
        $this->assertEquals(false, $rn->canConstruct('aa', 'ab'));
        $this->assertEquals(true, $rn->canConstruct('aa', 'aab'));
    }
}
