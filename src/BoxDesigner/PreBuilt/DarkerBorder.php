<?php

namespace BoxDesigner\PreBuilt;

use BoxDesigner\CustomBorder;

class DarkerBorder extends CustomBorder
{
    public function __construct()
    {
        parent::__construct('┏', '┓', '┗', '┛', '━', '┃');
    }
}
