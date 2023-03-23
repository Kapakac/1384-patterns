<?php

declare(strict_types=1);

namespace App\Abstracts\Factory\AbstractFactory;

abstract class Pizza
{
    public string $name;
    public Dough $dough;
    public Sauce $sauce;
    public Cheese $cheese;
    public array $veggies;
    public Pepperoni $pepperoni;

    abstract public function prepare(): void;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
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
