<?php

declare(strict_types=1);

namespace App\Models\Facade;

class DvdPlayer
{
    public function on(): string
    {
        return 'Dvd player on';
    }

    public function off(): string
    {
        return 'Dvd player off';
    }

    public function play(string $movie): string
    {
        return "$movie is playing";
    }

    public function stop(): string
    {
        return 'Dvd player stop';
    }
}
