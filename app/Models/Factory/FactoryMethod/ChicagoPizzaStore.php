<?php

declare(strict_types=1);

namespace App\Models\Factory\FactoryMethod;

use App\Abstracts\Factory\FactoryMethod\PizzaStore;
use App\Abstracts\Factory\FactoryMethod\Pizza;

class ChicagoPizzaStore extends PizzaStore
{
    protected function createPizza(string $pizza): Pizza
    {
        return match ($pizza) {
            'cheese' => new ChicagoStyleCheesePizza(),
            'veggie' => new ChicagoStyleVeggiePizza(),
            'pepperoni' => new ChicagoStylePepperoniPizza(),
        };
    }
}
