<?php

declare(strict_types=1);

namespace App\Models\Strategy\WeaponBehaviors;

use App\Contracts\Strategy\WeaponBehavior;

class SwordBehavior implements WeaponBehavior
{
    public function useWeapon(): string
    {
        return 'Теперь я сражаюсь мечом';
    }
}
