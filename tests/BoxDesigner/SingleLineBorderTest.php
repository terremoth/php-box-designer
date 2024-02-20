<?php

declare(strict_types=1);

namespace BoxDesigner\Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use BoxDesigner\SingleLineBorder;

#[CoversClass(SingleLineBorder::class)]
final class SingleLineBorderTest extends TestCase
{
    public function testLinesOutput(): void
    {
        $border = new SingleLineBorder();
        TestCase::assertEquals('┌', $border->topLeft());
        TestCase::assertEquals('┐', $border->topRight());
        TestCase::assertEquals('└', $border->bottomLeft());
        TestCase::assertEquals('┘', $border->bottomRight());
        TestCase::assertEquals('─', $border->horizontalLine());
        TestCase::assertEquals('│', $border->verticalLine());
    }
}
