<?php

declare(strict_types=1);

namespace BoxDesigner\Tests;

use BoxDesigner\PreBuilt\SingleLineBorder;
use BoxDesigner\Rectangle;
use BoxDesigner\SideLessThanOneException;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\UsesClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Rectangle::class)]
#[UsesClass(SingleLineBorder::class)]
final class SingleBorderBoxTest extends TestCase
{
    /**
     * @return array[]
     */
    public static function boxValuesProvider(): array
    {
        return [
            [
                "┌─┐" . PHP_EOL .
                "│ │" . PHP_EOL .
                "└─┘",
                1,1
            ],
            [
                "┌──┐" . PHP_EOL .
                "│  │" . PHP_EOL .
                "└──┘",
                1,2
            ],
            [
                "┌──┐" . PHP_EOL .
                "│  │" . PHP_EOL .
                "│  │" . PHP_EOL .
                "└──┘",
                2,2
            ],
            [
                "┌───┐" . PHP_EOL .
                "│   │" . PHP_EOL .
                "│   │" . PHP_EOL .
                "│   │" . PHP_EOL .
                "└───┘",
                3,3
            ],
            [
                "┌──────┐" . PHP_EOL .
                "│      │" . PHP_EOL .
                "│      │" . PHP_EOL .
                "└──────┘",
                2,6
            ],
            [
                "┌───────────────┐" . PHP_EOL .
                "│               │" . PHP_EOL .
                "│               │" . PHP_EOL .
                "└───────────────┘",
                2,15
            ],
            [
                "┌───┐" . PHP_EOL .
                "│   │" . PHP_EOL .
                "│   │" . PHP_EOL .
                "│   │" . PHP_EOL .
                "│   │" . PHP_EOL .
                "└───┘",
                4,3
            ]
        ];
    }

    /**
     * @throws SideLessThanOneException
     */
    #[DataProvider('boxValuesProvider')]
    public function testSidesLessThanOne(string $box, int $rows, int $columns): void
    {
        $rectangle = new Rectangle($rows, $columns);
        self::assertEquals($box, $rectangle->draw());
    }
}
