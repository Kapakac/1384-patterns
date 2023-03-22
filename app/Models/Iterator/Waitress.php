<?php

declare(strict_types=1);

namespace App\Models\Iterator;

class Waitress
{
    public function __construct(
        protected ArrayMenuItem $arrayMenuItems,
        protected QueryMenuItem $queryMenuItems
    )
    {
    }

    public function printFullMenu(): array
    {
        return [
            'first menu from array' => $this->arrayMenuItems->printMenu(),
            'second menu from query' => $this->queryMenuItems->printMenu()
        ];
    }
}
