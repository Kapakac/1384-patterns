<?php

declare(strict_types=1);

namespace App\Models\Facade;

class Light
{
    public function on(): string
    {
        return 'Light on';
    }

    public function dim(int $value): string
    {
        return "Light is dimming $value";
    }
}
