<?php

namespace App\Models\Decorator;

use App\Abstracts\Decorator\ToppingDecorator;

class Caramel extends ToppingDecorator
{
    public function getDescription(): string
    {
        return $this->topping->getDescription() . ' caramel';
    }

    public function calcCost(): float
    {
        return $this->topping->calcCost() + 10;
    }
}
