<?php

declare(strict_types=1);

namespace App\Models\Factory\AbstractFactory;

use App\Abstracts\Factory\AbstractFactory\Cheese;

class ReggianoCheese extends Cheese
{
    public function description(): string
    {
        return 'Reggiano Cheese';
    }
}
