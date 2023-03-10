<?php

declare(strict_types=1);

namespace App\Abstracts\Strategy;

abstract class Character
{
    public string $weaponBehavior;

    abstract public function fight(): string;

    public function setWeaponBehavior(string $weaponBehavior): void
    {
        $this->weaponBehavior = $weaponBehavior;
    }
}
