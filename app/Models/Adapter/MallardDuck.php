<?php

declare(strict_types=1);

namespace App\Models\Adapter;

use App\Contracts\Adapter\Duck;

class MallardDuck implements Duck
{

    public function quack(): string
    {
        return 'Quack';
    }

    public function fly(): string
    {
        return 'It is flying';
    }
}
