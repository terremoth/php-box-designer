<?php

declare(strict_types=1);

namespace BoxDesigner\Tests;

use BoxDesigner\PreBuilt\SingleLineBorder;
use BoxDesigner\Box;
use BoxDesigner\SideLessThanOneException;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\UsesClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Box::class)]
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
                2, 1
            ],
            [
                "┌──┐" . PHP_EOL .
                "│  │" . PHP_EOL .
                "│  │" . PHP_EOL .
                "└──┘",
                2, 2
            ],
            [
                "┌───┐" . PHP_EOL .
                "│   │" . PHP_EOL .
                "│   │" . PHP_EOL .
                "│   │" . PHP_EOL .
                "└───┘",
                3, 3
            ],
            [
                "┌──────┐" . PHP_EOL .
                "│      │" . PHP_EOL .
                "│      │" . PHP_EOL .
                "└──────┘",
                6, 2
            ],
            [
                "┌───────────────┐" . PHP_EOL .
                "│               │" . PHP_EOL .
                "│               │" . PHP_EOL .
                "└───────────────┘",
                15, 2
            ],
            [
                "┌───┐" . PHP_EOL .
                "│   │" . PHP_EOL .
                "│   │" . PHP_EOL .
                "│   │" . PHP_EOL .
                "│   │" . PHP_EOL .
                "└───┘",
                3, 4
            ]
        ];
    }

    /**
     * @throws SideLessThanOneException
     */
    #[DataProvider('boxValuesProvider')]
    public function testSidesLessThanOne(string $box, int $columns, int $rows): void
    {
        $rectangle = new Box($columns, $rows);
        self::assertEquals($box, $rectangle->draw());
    }
}
