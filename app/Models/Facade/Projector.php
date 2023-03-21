<?php

declare(strict_types=1);

namespace App\Models\Facade;

class Projector
{
    public function on(): string
    {
        return 'Projector on';
    }

    public function off(): string
    {
        return 'Projector off';
    }

    public function wideScreenMode(): string
    {
        return 'Projector widescreen mode 16x9';
    }

}
