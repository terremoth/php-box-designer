<?php

declare(strict_types=1);

namespace BoxDesigner\Tests;

use PHPUnit\Framework\TestCase;

use BoxDesigner\Rectangle;
use BoxDesigner\SideLessThanOneException;

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