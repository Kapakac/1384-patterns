<?php

declare(strict_types=1);

namespace App\Contracts\Decorator;

interface Topping
{
    public function getDescription(): string;

    public function calcCost(): float;
}
