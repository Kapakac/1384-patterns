<?php

declare(strict_types=1);

namespace App\Models\Factory\AbstractFactory;

use App\Abstracts\Factory\AbstractFactory\Sauce;

class MarinaraSauce extends Sauce
{
    public function description(): string
    {
        return 'Marinara Sauce';
    }
}
