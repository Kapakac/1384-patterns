<?php

namespace App\Models\Characters;

use App\Abstracts\Character;

class Queen extends Character
{
    public function fight(): string
    {
        return 'Я сражаюсь как королева';
    }
}
