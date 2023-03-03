<?php

declare(strict_types=1);

namespace App\Contracts\Strategy;

interface WeaponBehavior
{
    public function useWeapon(): string;
}
