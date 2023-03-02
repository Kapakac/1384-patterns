<?php

namespace App\Models\Decorator;

use App\Abstracts\Decorator\ToppingDecorator;

class MapleSyrup extends ToppingDecorator
{
    public function getDescription(): string
    {
        return $this->topping->getDescription() . ' maple syrup';
    }

    public function calcCost(): float
    {
        return $this->topping->calcCost() + 25;
    }
}
