<?php

namespace App\Models\WeaponBehaviors;

use App\Contracts\WeaponBehavior;

class SwordBehavior implements WeaponBehavior
{
    public function useWeapon(): string
    {
        return 'Теперь я сражаюсь мечом';
    }
}
