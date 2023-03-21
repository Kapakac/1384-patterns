<?php

declare(strict_types=1);

namespace App\Models\Command;

use App\Contracts\Command\Command;

class StereoOffCommand implements Command
{
    public function __construct(protected Stereo $stereo)
    {
    }

    public function execute()
    {
        $this->stereo->off();
    }

    public function undo()
    {
        $this->stereo->on();
    }
}
