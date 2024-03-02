<?php

namespace BoxDesigner\Tests;

use BoxDesigner\CustomBorder;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(CustomBorder::class)]
class CustomBorderTest extends TestCase
{
    private function getCustomBorder(): CustomBorder
    {
        return new CustomBorder(
            '╭',
            '╮',
            '╰',
            '╯',
            '┄',
            '┊'
        );
    }

    public function testSetTopLeft(): void
    {
        $box = $this->getCustomBorder()->setTopLeft('*');
        self::assertEquals('*', $box->topLeft());
        self::assertInstanceOf(CustomBorder::class, $box);
    }

    public function testSetBottomRight(): void
    {
        $box = $this->getCustomBorder()->setBottomRight('/');
        self::assertEquals('/', $box->bottomRight());
        self::assertInstanceOf(CustomBorder::class, $box);
    }

    public function testSetHorizontalLine(): void
    {
        $box = $this->getCustomBorder()->setHorizontalLine('_');
        self::assertEquals('_', $box->horizontalLine());
        self::assertInstanceOf(CustomBorder::class, $box);
    }

    public function testSetVerticalLine(): void
    {
        $box = $this->getCustomBorder()->setVerticalLine('|');
        self::assertEquals('|', $box->verticalLine());
        self::assertInstanceOf(CustomBorder::class, $box);
    }

    public function testSetBottomLeft(): void
    {
        $box = $this->getCustomBorder()->setBottomLeft('\\');
        self::assertEquals('\\', $box->bottomLeft());
        self::assertInstanceOf(CustomBorder::class, $box);
    }

    public function testSetTopRight(): void
    {
        $box = $this->getCustomBorder()->setTopRight('>');
        self::assertEquals('>', $box->topRight());
        self::assertInstanceOf(CustomBorder::class, $box);
    }
}
