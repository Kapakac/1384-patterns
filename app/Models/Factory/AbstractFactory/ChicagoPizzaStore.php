<?php

declare(strict_types=1);

namespace App\Models\Factory\AbstractFactory;

use App\Abstracts\Factory\AbstractFactory\PizzaStore;
use App\Abstracts\Factory\AbstractFactory\Pizza;

class ChicagoPizzaStore extends PizzaStore
{
    protected function createPizza(string $pizza = null): Pizza
    {
        $ingredientFactory = new ChicagoPizzaIngredientFactory();

        if ($pizza === 'veggie') {
            $pizza = new VeggiesPizza($ingredientFactory);
            $pizza->setName('New York Style Veggie Pizza');
        }

        if ($pizza === 'pepperoni') {
            $pizza = new PepperoniPizza($ingredientFactory);
            $pizza->setName('New York Style Pepperoni Pizza');
        }

        return $pizza;
    }
}
