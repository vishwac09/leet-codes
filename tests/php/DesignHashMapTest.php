<?php

namespace LeetCode\Tests;

use LeetCode\Problems\DesignHashMap\DesignHashMap;
use PHPUnit\Framework\TestCase;

final class DesignHashMapTest extends TestCase
{
    public function testDesignHashMapTestExample1()
    {
        $dhm = new DesignHashMap();
        $dhm->put(1, 1);
        $this->assertEquals(1, $dhm->get(1));
    }
}
