<?php

declare(strict_types=1);

namespace App\Models\Factory\AbstractFactory;

use App\Abstracts\Factory\AbstractFactory\Dough;

class ThinCrustDough extends Dough
{
    public function description(): string
    {
        return 'ThickCrust style extra thick crust dough';
    }
}
