<?php

declare(strict_types=1);

namespace App\Models\Factory\AbstractFactory;

use App\Abstracts\Factory\AbstractFactory\Pepperoni;

class SlicedPepperoni extends Pepperoni
{
    public function description(): string
    {
        return 'Sliced Pepperoni';
    }
}
