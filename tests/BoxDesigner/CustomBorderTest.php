<?php

namespace BoxDesigner\Tests;

use BoxDesigner\BoxBuilder;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(BoxBuilder::class)]
class BoxBuilderTest extends TestCase
{
    private BoxBuilder $boxBuilder;

    /**
     * @param non-empty-string $name
     */
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->boxBuilder = new BoxBuilder(
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
        $box = $this->boxBuilder->setTopLeft('*');
        self::assertEquals('*', $this->boxBuilder->topLeft());
        self::assertInstanceOf(BoxBuilder::class, $box);
    }

    public function testSetBottomRight(): void
    {
        $box = $this->boxBuilder->setBottomRight('/');
        self::assertEquals('/', $this->boxBuilder->bottomRight());
        self::assertInstanceOf(BoxBuilder::class, $box);
    }

    public function testSetHorizontalLine(): void
    {
        $box = $this->boxBuilder->setHorizontalLine('_');
        self::assertEquals('_', $this->boxBuilder->horizontalLine());
        self::assertInstanceOf(BoxBuilder::class, $box);
    }

    public function testSetVerticalLine(): void
    {
        $box = $this->boxBuilder->setVerticalLine('|');
        self::assertEquals('|', $this->boxBuilder->verticalLine());
        self::assertInstanceOf(BoxBuilder::class, $box);
    }

    public function testSetBottomLeft(): void
    {
        $box = $this->boxBuilder->setBottomLeft('\\');
        self::assertEquals('\\', $this->boxBuilder->bottomLeft());
        self::assertInstanceOf(BoxBuilder::class, $box);
    }

    public function testSetTopRight(): void
    {
        $box = $this->boxBuilder->setTopRight('>');
        self::assertEquals('>', $this->boxBuilder->topRight());
        self::assertInstanceOf(BoxBuilder::class, $box);
    }
}
