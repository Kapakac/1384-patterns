<?php

declare(strict_types=1);

namespace App\Models\Factory\AbstractFactory;

use App\Contracts\Factory\PizzaIngredientFactory;

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough(): ThinCrustDough
    {
        return new ThinCrustDough();
    }

    public function createSauce(): MarinaraSauce
    {
        return new MarinaraSauce();
    }

    public function createCheese(): ReggianoCheese
    {
        return new ReggianoCheese();
    }

    public function createVeggies(): array
    {
        return [new Garlic(), new Onion(), new Mushroom()];
    }

    public function createPepperoni(): SlicedPepperoni
    {
        return new SlicedPepperoni();
    }
}
