<?php

declare(strict_types=1);

namespace App\Models\Factory\FactoryMethod;

use App\Abstracts\Factory\FactoryMethod\Pizza;

class ChicagoStylePepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Chicago Deep Dish Veggie Pizza';
        $this->dough = 'Extra Thick Crust Dough';
        $this->sauce = 'Plum Tomato Sauce';
        $this->toppings[] = 'Shredded Mozzarella Cheese';
        $this->toppings[] = 'Black Olives';
        $this->toppings[] = 'Spinach';
        $this->toppings[] = 'Eggplant';
        $this->toppings[] = 'Sliced Pepperoni';
    }

    public function cut(): void
    {
        echo 'Cutting the pizza into square slices</br>';
    }
}
