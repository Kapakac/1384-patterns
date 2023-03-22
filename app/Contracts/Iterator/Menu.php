<?php

declare(strict_types=1);

namespace App\Contracts\Iterator;

interface Menu
{
    public function createIterator(): \Iterator;
}
