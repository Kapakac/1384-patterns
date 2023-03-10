<?php

declare(strict_types=1);

namespace App\Models\Strategy\Characters;

use App\Abstracts\Strategy\Character;

class Queen extends Character
{
    public function fight(): string
    {
        return 'Я сражаюсь как королева';
    }
}
