<?php

declare(strict_types=1);

namespace BoxDesigner\PreBuilt;

use BoxDesigner\CustomBorder;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\UsesClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(DarkerBorder::class)]
#[UsesClass(CustomBorder::class)]
class DarkerBorderTest extends TestCase
{
    public function testLinesOutput(): void
    {
        $border = new DarkerBorder();
        self::assertEquals('┏', $border->topLeft());
        self::assertEquals('┓', $border->topRight());
        self::assertEquals('┗', $border->bottomLeft());
        self::assertEquals('┛', $border->bottomRight());
        self::assertEquals('━', $border->horizontalLine());
        self::assertEquals('┃', $border->verticalLine());
    }
}
