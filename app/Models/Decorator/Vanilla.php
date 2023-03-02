<?php

namespace App\Models\Decorator;

use App\Abstracts\Decorator\ToppingDecorator;

class Vanilla extends ToppingDecorator
{
    public function getDescription(): string
    {
        return $this->topping->getDescription() . ' vanilla';
    }

    public function calcCost(): float
    {
        return $this->topping->calcCost() + 5;
    }
}
