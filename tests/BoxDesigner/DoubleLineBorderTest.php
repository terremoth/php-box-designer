<?php

declare(strict_types=1);

namespace BoxDesigner\Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

use BoxDesigner\DoubleLineBorder;

#[CoversClass(DoubleLineBorder::class)]
final class DoubleLineBorderTest extends TestCase
{
    public function testLinesOutput()
    {
        $border = new DoubleLineBorder();
        $this->assertEquals($border->topLeft(), '╔');
        $this->assertEquals($border->topRight(), '╗');
        $this->assertEquals($border->bottomLeft(), '╚');
        $this->assertEquals($border->bottomRight(), '╝');
        $this->assertEquals($border->horizontalLine(), '═');
        $this->assertEquals($border->verticalLine(), '║');
    }
    
}