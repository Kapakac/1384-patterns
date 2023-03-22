<?php

declare(strict_types=1);

namespace App\Abstracts\Template;

abstract class CaffeineBeverage
{
    final public function prepareRecipe(): array
    {
        return [
            $this->boilWater(),
            $this->brew(),
            $this->pourInCup(),
            $this->customerWantsCondiments() ? $this->addCondiments() : 'without topping'
        ];
    }

    public abstract function brew();

    public abstract function addCondiments();

    public function boilWater(): string
    {
        return 'Boiling water';
    }

    public function pourInCup(): string
    {
        return 'Pouring into cup';
    }

    public function customerWantsCondiments(): bool
    {
        return (bool)request()->topping;
    }
}
