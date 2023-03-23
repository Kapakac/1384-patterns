<?php

declare(strict_types=1);

namespace App\Models\Factory\FactoryMethod;

use App\Abstracts\Factory\FactoryMethod\Pizza;

class ChicagoStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Chicago Style Deep Dish Cheese Pizza';
        $this->dough = 'Extra Thick Crust Dough';
        $this->sauce = 'Plum Tomato Sauce';
        $this->toppings[] = 'Shredded Mozzarella Cheese';
    }

    public function cut(): void
    {
        echo 'Cutting the pizza into square slices</br>';
    }
}
