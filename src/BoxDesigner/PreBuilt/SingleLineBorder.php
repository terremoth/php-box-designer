<?php

declare(strict_types=1);

namespace BoxDesigner\PreBuilt;

use BoxDesigner\CustomBorder;

class SingleLineBorder extends CustomBorder
{
    public function __construct()
    {
        parent::__construct('┌', '┐', '└', '┘', '─', '│');
    }
}
