<?php

namespace App\Abstracts;

abstract class Character
{
    abstract public function fight(): string;

    public string $weaponBehavior;


    public function setWeaponBehavior(string $weaponBehavior): void
    {
        $this->weaponBehavior = $weaponBehavior;
    }
}
