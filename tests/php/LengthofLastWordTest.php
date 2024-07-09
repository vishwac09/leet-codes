<?php

namespace LeetCode\Tests;

use LeetCode\Problems\LengthofLastWord\LengthofLastWord;
use PHPUnit\Framework\TestCase;

final class LengthofLastWordTest extends TestCase
{
    public function testLengthofLastWordExample1()
    {
        $lolw = new LengthofLastWord();
        $this->assertEquals(5, $lolw->lengthOfLastWord("Hello World"));
        $this->assertEquals(4, $lolw->lengthOfLastWord("   fly me   to   the moon  "));
        $this->assertEquals(6, $lolw->lengthOfLastWord("luffy is still joyboy"));
    }
}
