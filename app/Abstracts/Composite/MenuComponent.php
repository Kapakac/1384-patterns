<?php

declare(strict_types=1);

namespace App\Abstracts\Composite;

use Exception;

abstract class MenuComponent
{
    /**
     * @throws Exception
     */
    public function getChild(MenuComponent $component): self
    {
        throw new Exception('Child does not exist');
    }

    /**
     * @throws Exception
     */
    public function add(MenuComponent $component): void
    {
        throw new Exception();
    }

    /**
     * @throws Exception
     */
    public function remove(MenuComponent $component): void
    {
        throw new Exception();
    }

    /**
     * @throws Exception
     */
    public function getName(): string
    {
        throw new Exception();
    }

    /**
     * @throws Exception
     */
    public function getDescription(): string
    {
        throw new Exception();
    }

    /**
     * @throws Exception
     */
    public function getPrice(): float
    {
        throw new Exception();
    }

    abstract public function print(): array;
}
