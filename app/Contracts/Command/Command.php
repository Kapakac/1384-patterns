<?php

declare(strict_types=1);

namespace App\Contracts\Command;

interface Command
{
    public function execute();

    public function undo();
}
