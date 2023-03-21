<?php

declare(strict_types=1);

namespace App\Models\Facade;

class Amplifier
{
    public function on(): string
    {
        return 'Amplifier on';
    }

    public function off(): string
    {
        return 'Amplifier off';
    }

    public function setDvd(DvdPlayer $dvdPlayer): string
    {
        return 'Dvd setup';
    }

    public function setSurroundSound(): string
    {
        return 'Surround Sound';
    }

    public function setVolume(int $volume): string
    {
        return "Sound: $volume";
    }
}
