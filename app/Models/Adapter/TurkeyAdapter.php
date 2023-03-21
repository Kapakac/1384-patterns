<?php

declare(strict_types=1);

namespace App\Models\Adapter;

use App\Contracts\Adapter\Turkey;
use App\Contracts\Adapter\Duck;

class TurkeyAdapter implements Duck
{
    public function __construct(protected Turkey $turkey)
    {
    }

    public function quack(): string
    {
        return $this->turkey->gobble();
    }

    public function fly(): array
    {
        return array_map(fn() => 'It is flying a short distance', range(1, 5));
    }
}
