<?php

declare(strict_types=1);

namespace BoxDrawer\Tests;

use PHPUnit\Framework\TestCase;

use BoxDrawer\Rectangle;
use BoxDrawer\SideLessThanOneException;

class RectangleLessThanOneParamsExceptionTest extends TestCase
{

    public function lessThanOneValuesProvider()
    {
        return [
            [-4, 8],
            [ 0, 0],
            [ 1, 0],
            [ 2, -5],
            [ 0, 1]
        ];
    }

    /**
     * @dataProvider lessThanOneValuesProvider
     */
    public function testSidesLessThanOne($row, $column)
    {
        $this->expectException(SideLessThanOneException::class);
        new Rectangle($row, $column);
    }
    
}