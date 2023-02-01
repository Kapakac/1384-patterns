<?php

namespace App\Models\Strategy\Characters;

use App\Abstracts\Strategy\Character;

class King extends Character
{
    public function fight(): string
    {
        return 'Я сражаюсь как король';
    }
}
