<?php

namespace LeetCode\Tests;

use LeetCode\Problems\EncodeDecodeTinyURL\EncodeDecodeTinyURL;
use PHPUnit\Framework\TestCase;

final class EncodeDecodeTinyURLTest extends TestCase
{
    public function testEncodeDecodeTinyURLTestExample1()
    {
        $edtu = new EncodeDecodeTinyURL();
        $url = 'https://leetcode.com/problems/container-with-most-water/';
        $hash = $edtu->encode($url);
        $this->assertEquals($url, $edtu->decode($hash));
    }
}
