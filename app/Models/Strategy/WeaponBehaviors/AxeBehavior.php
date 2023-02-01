<?php

namespace App\Models\Strategy\WeaponBehaviors;

use App\Contracts\Strategy\WeaponBehavior;

class AxeBehavior implements WeaponBehavior
{
    public function useWeapon(): string
    {
        return 'Теперь я сражаюсь топором';
    }
}
