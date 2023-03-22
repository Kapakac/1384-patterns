<?php

declare(strict_types=1);

namespace App\Models\Iterator;

use App\Contracts\Iterator\Menu;
use Illuminate\Support\Arr;

class ArrayMenuItem implements Menu
{
    protected array $menuItemsForLoop = [
        [
            'name' => 'name-0',
            'description' => 'description-0',
            'price' => 15
        ],
        [
            'name' => 'name-1',
            'description' => 'description-1',
            'price' => 35.25
        ],
        [
            'name' => 'name-2',
            'description' => 'description-2',
            'price' => 55.55
        ],
    ];

    public function printMenu(): array
    {
        $rows = [];
        $iteratorItems = $this->createIterator();

        while ($iteratorItems->valid()) {
            $item = $iteratorItems->current();
            $iteratorItems->next();
            $rows[] = Arr::get($item, 'name') . ' - ' . Arr::get($item, 'description') . ': ' . Arr::get($item, 'price');
        }

        return $rows;
    }

    public function createIterator(): \Iterator
    {
        return new MenuIterator($this->menuItemsForLoop);
    }
}
