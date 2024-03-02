<?php

namespace BoxDesigner\Tests;

use BoxDesigner\BoxBuilder;
use PHPUnit\Framework\TestCase;

class BoxBuilderTest extends TestCase
{
    private BoxBuilder $box;
    public function __construct(string $name)
    {
        parent::__construct($name);

        $this->box = new BoxBuilder();
        $this->box->setVerticalLine('┄')
            ->setHorizontalLine('┊')
            ->setTopLeft('╭')
            ->setTopRight('╮')
            ->setBottomLeft('╰')
            ->setBottomRight('╯')
        ;
    }

    public function testTopLeft(): void
    {
        self::assertEquals('╭', $this->box->topLeft());
    }

    public function testBottomLeft(): void
    {
        self::assertEquals('╭', $this->box->bottomLeft());
    }

    public function testSetTopLeft(): void
    {
        self::assertEquals('╭', $this->box->topLeft());
    }

    public function testVerticalLine(): void
    {
        self::assertEquals('╭', $this->box->verticalLine());
    }

    public function testSetBottomRight(): void
    {
        self::assertEquals('╭', $this->box->bottomRight());
    }

    public function testSetHorizontalLine(): void
    {
        self::assertEquals('╭', $this->box->horizontalLine());
    }

    public function testTopRight(): void
    {
        self::assertEquals('╭', $this->box->topRight());
    }

    public function testBottomRight(): void
    {
        self::assertEquals('╭', $this->box->bottomRight());
    }

    public function testSetVerticalLine(): void
    {
        self::assertEquals('╭', $this->box->verticalLine());
    }

    public function testSetBottomLeft(): void
    {
        self::assertEquals('╭', $this->box->bottomLeft());
    }

    public function testHorizontalLine(): void
    {
        self::assertEquals('╭', $this->box->horizontalLine());
    }

    public function testSetTopRight(): void
    {
        self::assertEquals('╭', $this->box->topRight());
    }
}
