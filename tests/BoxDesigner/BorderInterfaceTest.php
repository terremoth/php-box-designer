<?php

namespace BoxDesigner\Tests;

use BoxDesigner\BorderInterface;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\CoversNothing;
use PHPUnit\Framework\TestCase;

class BorderInterfaceTest extends TestCase
{
    private function getStub(): BorderInterface
    {
        return new class () implements BorderInterface
        {
            public function topLeft(): string
            {
                return 'o';
            }

            public function topRight(): string
            {
                return 'o';
            }
            public function bottomLeft(): string
            {
                return 'o';
            }

            public function bottomRight(): string
            {
                return 'o';
            }

            public function horizontalLine(): string
            {
                return '-';
            }

            public function verticalLine(): string
            {
                return '|';
            }
        };
    }

    #[CoversNothing]
    public function testIfInterfaceCanBeImplemented(): void
    {
        $stub = $this->getStub();
        $this->assertInstanceOf(BorderInterface::class, $stub);
    }

    #[CoversNothing]
    public function testBorderInterfaceMethods(): void
    {
        $stub = $this->getStub();
        $this->assertIsString($stub->topLeft());
        $this->assertIsString($stub->topRight());
        $this->assertIsString($stub->bottomLeft());
        $this->assertIsString($stub->bottomRight());
        $this->assertIsString($stub->horizontalLine());
        $this->assertIsString($stub->verticalLine());
    }
}
