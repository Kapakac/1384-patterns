<?php

declare(strict_types=1);

namespace App\Models\Composite;

use App\Abstracts\Composite\MenuComponent;

class Waitress
{
    public function __construct(public MenuComponent $allMenus)
    {
    }

    public function printMenu(): MenuComponent
    {
        return $this->allMenus;
    }
}
