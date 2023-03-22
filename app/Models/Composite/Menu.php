<?php

declare(strict_types=1);

namespace App\Models\Composite;

use App\Abstracts\Composite\MenuComponent;

class Menu extends MenuComponent
{
    public array $menuComponents;

    public function __construct(public string $name, public string $description)
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

    public function add(MenuComponent $component): void
    {
        $this->menuComponents[$component->getName()] = $component;
    }

    public function remove(MenuComponent $component): void
    {
        unset($this->menuComponents[$component->getName()]);
    }

    public function getChild(MenuComponent $component): MenuComponent
    {
        return $this->menuComponents[$component->getName()];
    }

    public function print(): array
    {
        return [
            'name' => $this->name,
            'description' => $this->description
        ];
    }
}
