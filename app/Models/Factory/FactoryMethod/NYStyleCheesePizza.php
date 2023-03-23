<?php

declare(strict_types=1);

namespace App\Models\Factory\FactoryMethod;

use App\Abstracts\Factory\FactoryMethod\Pizza;

class NYStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'NY Style Sauce and Cheese Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';
        $this->toppings[] = 'Grated Reggiano Cheese';
    }
}
