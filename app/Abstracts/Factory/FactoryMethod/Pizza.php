<?php

declare(strict_types=1);

namespace App\Abstracts\Factory\FactoryMethod;

abstract class Pizza
{
    public string $name;
    public string $dough;
    public string $sauce;
    public array $toppings;

    public function getName(): string
    {
        return $this->name;
    }

    public function prepare(): void
    {
        echo 'Adding toppings: ' . implode(", ", $this->toppings) . '</br>';
    }

    public function bake(): void
    {
        echo 'Bake for 25 minutes at 350</br>';
    }

    public function cut(): void
    {
        echo 'Cutting the pizza into diagonal slices</br>';
    }

    public function box(): void
    {
        echo 'Place pizza in official PizzaStore box</br>';
    }
}
