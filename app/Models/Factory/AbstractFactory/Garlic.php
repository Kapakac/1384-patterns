<?php

declare(strict_types=1);

namespace App\Models\Factory\AbstractFactory;

use App\Abstracts\Factory\AbstractFactory\Veggies;

class Garlic extends Veggies
{
    public function description(): string
    {
        return 'Garlic';
    }
}
