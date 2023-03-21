<?php

declare(strict_types=1);

namespace App\Models\Command;

use App\Contracts\Command\Command;

class LightOffCommand implements Command
{
    public function __construct(protected Light $light)
    {
    }

    public function execute()
    {
        $this->light->off();
    }

    public function undo()
    {
        $this->light->on();
    }
}
