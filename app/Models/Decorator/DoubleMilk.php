<?php

namespace App\Models\Decorator;

use App\Abstracts\Decorator\ToppingDecorator;

class DoubleMilk extends ToppingDecorator
{
    public function getDescription(): string
    {
        return $this->topping->getDescription() . ' double milk';
    }

    public function calcCost(): float
    {
        return $this->topping->calcCost() + 15;
    }
}
