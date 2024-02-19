<?php

declare(strict_types=1);

namespace BoxDesigner\Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

use BoxDesigner\Rectangle;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(Rectangle::class)]
final class SingleLineRectanglesDrawingTest extends TestCase
{

    public static function boxValuesProvider()
    {
        return [
            [
                "┌─┐".PHP_EOL.
                "│ │".PHP_EOL.
                "└─┘",
                1,1
            ],
            [
                "┌──┐".PHP_EOL.
                "│  │".PHP_EOL.
                "└──┘",
                1,2
            ],
            [
                "┌──┐".PHP_EOL.
                "│  │".PHP_EOL.
                "│  │".PHP_EOL.
                "└──┘",
                2,2       
            ],
            [
                "┌───┐".PHP_EOL.
                "│   │".PHP_EOL.
                "│   │".PHP_EOL.
                "│   │".PHP_EOL.
                "└───┘",
                3,3
            ],
            [
                "┌──────┐".PHP_EOL.
                "│      │".PHP_EOL.
                "│      │".PHP_EOL.
                "└──────┘",
                2,6
            ],
            [
                "┌───────────────┐".PHP_EOL.
                "│               │".PHP_EOL.
                "│               │".PHP_EOL.
                "└───────────────┘",
                2,15
            ],
            [
                "┌───┐".PHP_EOL.
                "│   │".PHP_EOL.
                "│   │".PHP_EOL.
                "│   │".PHP_EOL.
                "│   │".PHP_EOL.
                "└───┘",
                4,3
            ]
           
        ];
    }

    #[DataProvider('boxValuesProvider')]
    public function testSidesLessThanOne($box, $rows, $columns)
    {
        $rectangle = new Rectangle($rows, $columns);
        $this->assertEquals($box, $rectangle->draw());
    }
    
}