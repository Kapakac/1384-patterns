<?php

declare(strict_types=1);

namespace App\Models\Factory\AbstractFactory;

use App\Contracts\Factory\PizzaIngredientFactory;
use App\Abstracts\Factory\AbstractFactory\Pizza;

class VeggiesPizza extends Pizza
{
    public function __construct(protected PizzaIngredientFactory $ingredientFactory)
    {
    }

    public function prepare(): void
    {
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->veggies = $this->ingredientFactory->createVeggies();
    }
}
