<?php

declare(strict_types=1);

namespace App\Models\Facade;

class PopcornPopper
{
    public function on(): string
    {
        return 'Popper on';
    }

    public function cook(): string
    {
        return 'Cook popcorn';
    }

    public function off(): string
    {
        return 'Popper off';
    }
}
