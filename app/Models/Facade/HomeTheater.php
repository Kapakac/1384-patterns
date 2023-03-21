<?php

declare(strict_types=1);

namespace App\Models\Facade;

class HomeTheater
{
    protected Amplifier $amplifier;
    protected DvdPlayer $dvdPlayer;
    protected Screen $screen;
    protected Light $light;
    protected Projector $projector;
    protected PopcornPopper $popcornPopper;

    public function __construct()
    {
        $this->amplifier = new Amplifier();
        $this->dvdPlayer = new DvdPlayer();
        $this->screen = new Screen();
        $this->light = new Light();
        $this->projector = new Projector();
        $this->popcornPopper = new PopcornPopper();
    }

    public function watchMovie(string $movieName): array
    {
        return [
            "Get ready to watch a movie '$movieName'",
            $this->popcornPopper->on(),
            $this->popcornPopper->cook(),
            $this->light->dim(10),
            $this->screen->down(),
            $this->projector->on(),
            $this->projector->wideScreenMode(),
            $this->amplifier->on(),
            $this->amplifier->setDvd($this->dvdPlayer),
            $this->amplifier->setSurroundSound(),
            $this->amplifier->setVolume(5),
            $this->dvdPlayer->on(),
            $this->dvdPlayer->play($movieName)
        ];
    }

    public function endMovie(): array
    {
        return [
            'Shutting movie theater down...',
            $this->popcornPopper->off(),
            $this->light->on(),
            $this->screen->up(),
            $this->projector->off(),
            $this->amplifier->off(),
            $this->dvdPlayer->stop(),
            $this->dvdPlayer->off()
        ];
    }
}
