<?php

namespace LeetCode\Tests;

use LeetCode\Problems\DesignHashset\DesignHashset;
use PHPUnit\Framework\TestCase;

final class DesignHashsetTest extends TestCase
{
    public function testDesignHashsetTestExample1()
    {
        $dh = new DesignHashset();
        $this->assertNull($dh->add(1));
    }
}
