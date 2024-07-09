<?php

namespace LeetCode\Tests;

use LeetCode\Problems\ExcelSheetColumnTitle\ExcelSheetColumnTitle;
use PHPUnit\Framework\TestCase;

final class ExcelSheetColumnTitleTest extends TestCase
{
    public function testExcelSheetColumnTitleExample1()
    {
        $esct = new ExcelSheetColumnTitle();
        $this->assertEquals('A', $esct->convertToTitle(1));
        $this->assertEquals('Z', $esct->convertToTitle(26));
        $this->assertEquals('AA', $esct->convertToTitle(27));
        $this->assertEquals('ZY', $esct->convertToTitle(701));
        $this->assertEquals('ZZ', $esct->convertToTitle(702));
        $this->assertEquals('AAA', $esct->convertToTitle(703));
    }
}
