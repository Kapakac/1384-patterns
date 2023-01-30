<?php

namespace App\Models\WeaponBehaviors;

use App\Contracts\WeaponBehavior;

class AxeBehavior implements WeaponBehavior
{
    public function useWeapon(): string
    {
        return 'Теперь я сражаюсь топором';
    }
}
