<?php

declare(strict_types=1);

namespace App\Models\Iterator;

use Illuminate\Database\Eloquent\Model;
use App\Contracts\Iterator\Menu;

class QueryMenuItem extends Model implements Menu
{
    protected $table = 'foodmenu';

    protected $appends = ['menu_items_for_loop'];

    public function getMenuItemsForLoopAttribute()
    {
        return self::select('name', 'description', 'price')->limit(5)->get();
    }

    public function printMenu(): array
    {
        $rows = [];
        $iteratorItems = $this->createIterator();

        foreach ($iteratorItems as $item) {
            $rows[] = $item->getAttribute('name') . ' - ' . $item->getAttribute('description') . ': ' . $item->getAttribute('price');
        }

        return $rows;
    }

    public function createIterator(): \Iterator
    {
        return new MenuIterator($this->getMenuItemsForLoopAttribute());
    }
}
