<?php

declare(strict_types=1);

namespace App\Models\Command;

use App\Contracts\Command\Command;

class LightOnCommand implements Command
{
    public function __construct(protected Light $light)
    {
    }

    public function execute()
    {
        $this->light->on();
    }

    public function undo()
    {
        $this->light->off();
    }
}
