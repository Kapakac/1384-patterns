<?php

declare(strict_types=1);

namespace App\Models\Command;

use App\Contracts\Command\Command;

class StereoOnCommand implements Command
{
    public function __construct(protected Stereo $stereo)
    {
    }

    public function execute()
    {
        $this->stereo->on();
        $this->stereo->setVolume(10);
    }

    public function undo()
    {
        $this->stereo->off();
    }
}
