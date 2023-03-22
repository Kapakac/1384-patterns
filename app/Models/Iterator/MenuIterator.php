<?php

declare(strict_types=1);

namespace App\Models\Iterator;

class MenuIterator implements \Iterator
{
    private int $currentIndex = 0;

    function __construct(private $menuItems)
    {
    }

    public function getMenuItems()
    {
        return $this->menuItems;
    }

    public function current(): mixed
    {
        return $this->menuItems[$this->currentIndex];
    }

    public function next(): void
    {
        $this->currentIndex++;
    }

    public function key(): int
    {
        return $this->currentIndex;
    }

    public function valid(): bool
    {
        return !($this->currentIndex >= count($this->menuItems));
    }

    public function rewind(): void
    {
        $this->currentIndex = 0;
    }
}
