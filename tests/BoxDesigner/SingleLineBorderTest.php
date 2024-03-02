<?php

declare(strict_types=1);

namespace BoxDesigner\Tests;

use BoxDesigner\PreBuilt\SingleLineBorder;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

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
