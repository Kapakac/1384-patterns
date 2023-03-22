<?php

declare(strict_types=1);

namespace App\Models\Composite;

use App\Abstracts\Composite\MenuComponent;

class MenuItem extends MenuComponent
{
    public function __construct(
        public string $name,
        public string $description,
        public float  $price
    )
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function print(): array
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price
        ];
    }
}
