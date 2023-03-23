<?php

declare(strict_types=1);

namespace App\Contracts\Factory;

use App\Abstracts\Factory\AbstractFactory\Pepperoni;
use App\Abstracts\Factory\AbstractFactory\Cheese;
use App\Abstracts\Factory\AbstractFactory\Dough;
use App\Abstracts\Factory\AbstractFactory\Sauce;

interface PizzaIngredientFactory
{
    public function createDough(): Dough;

    public function createSauce(): Sauce;

    public function createCheese(): Cheese;

    public function createVeggies(): array;

    public function createPepperoni(): Pepperoni;
}
