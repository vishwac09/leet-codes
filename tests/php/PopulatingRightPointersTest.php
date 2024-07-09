<?php

namespace LeetCode\Tests;

use LeetCode\Problems\PopulatingRightPointers\PopulatingRightPointers;
use LeetCode\Problems\Helpers\Node;
use PHPUnit\Framework\TestCase;

final class PopulatingRightPointersTest extends TestCase
{
    public function testPopulatingRightPointersTestExample1()
    {
        $a = new Node(1);
        $b = new Node(2);
        $c = new Node(3);
        $a->left = $b;
        $a->right = $c;
        $plrp = new PopulatingRightPointers();
        $res = $plrp->connect($a);
        $this->assertEquals(1, $res->val);
    }
}
