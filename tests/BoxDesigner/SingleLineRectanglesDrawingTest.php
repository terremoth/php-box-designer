<?php

declare(strict_types=1);

namespace BoxDesigner\Tests;

use BoxDesigner\SideLessThanOneException;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

use BoxDesigner\Rectangle;
use BoxDesigner\SingleLineBorder;
use PHPUnit\Framework\Attributes\UsesClass;

#[CoversClass(Rectangle::class)]
#[UsesClass(SingleLineBorder::class)]
final class SingleLineRectanglesDrawingTest extends TestCase
{

    /**
     * @return array[[string, int, int]]
     */
    public static function boxValuesProvider() : array
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

    /**
     * @throws SideLessThanOneException
     */
    #[DataProvider('boxValuesProvider')]
    public function testSidesLessThanOne(string $box, int $rows, int $columns) : void
    {
        $rectangle = new Rectangle($rows, $columns);
        $this->assertEquals($box, $rectangle->draw());
    }
    
}