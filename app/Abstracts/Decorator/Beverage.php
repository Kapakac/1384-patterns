<?php

declare(strict_types=1);

namespace App\Abstracts\Decorator;

use App\Contracts\Decorator\Topping;

abstract class Beverage implements Topping
{
    public string $description;

    public SizeBeverage $size;

    public function __construct()
    {
        $this->description = 'unknown';
        $this->size = SizeBeverage::Small;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getSize(): SizeBeverage
    {
        return $this->size;
    }

    public function setSize(SizeBeverage $size): void
    {
        $this->size = $size;
    }
}
