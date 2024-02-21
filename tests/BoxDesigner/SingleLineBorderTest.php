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
        self::assertEquals('┌', $border->topLeft());
        self::assertEquals('┐', $border->topRight());
        self::assertEquals('└', $border->bottomLeft());
        self::assertEquals('┘', $border->bottomRight());
        self::assertEquals('─', $border->horizontalLine());
        self::assertEquals('│', $border->verticalLine());
    }
}
