<?php

declare(strict_types=1);

namespace App\Models\Adapter;

use App\Contracts\Adapter\Turkey;

class WildTurkey implements Turkey
{

    public function gobble(): string
    {
        return 'Gobble gobble';
    }

    public function fly(): string
    {
        return 'It is flying a short distance';
    }
}
