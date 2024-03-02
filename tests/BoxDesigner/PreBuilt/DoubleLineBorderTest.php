<?php

declare(strict_types=1);

namespace BoxDesigner\Tests;

use BoxDesigner\PreBuilt\DoubleLineBorder;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(DoubleLineBorder::class)]
final class DoubleLineBorderTest extends TestCase
{
    public function testLinesOutput(): void
    {
        $border = new DoubleLineBorder();
        self::assertEquals('╔', $border->topLeft());
        self::assertEquals('╗', $border->topRight());
        self::assertEquals('╚', $border->bottomLeft());
        self::assertEquals('╝', $border->bottomRight());
        self::assertEquals('═', $border->horizontalLine());
        self::assertEquals('║', $border->verticalLine());
    }
}
