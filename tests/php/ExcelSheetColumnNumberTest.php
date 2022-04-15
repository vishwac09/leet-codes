<?php

namespace LeetCode\Tests;

use LeetCode\Problems\ExcelSheetColumnNumber\ExcelSheetColumnNumber;
use PHPUnit\Framework\TestCase;

final class ExcelSheetColumnNumberTest extends TestCase
{
	public function testExcelSheetColumnNumberExample1()
	{
        $esn = new ExcelSheetColumnNumber();
        $this->assertEquals(1, $esn->titleToNumber('A'));
        $this->assertEquals(27, $esn->titleToNumber('AA'));
        $this->assertEquals(702, $esn->titleToNumber('ZZ'));
	}
}
