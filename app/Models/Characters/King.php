<?php

namespace App\Models\Characters;

use App\Abstracts\Character;

class King extends Character
{
    public function fight(): string
    {
        return 'Я сражаюсь как король';
    }
}
