<?php

declare(strict_types=1);

namespace App\Models\Command;

class Stereo
{
    private string $message;

    private int $volume = 5;

    public function on(): void
    {
        $this->message = 'Стерео звук включен; ';

        echo $this->message;
    }

    public function off(): void
    {
        $this->message = 'Стерео звук выключен; ';

        echo $this->message;
    }

    public function setVolume(int $volume): void
    {
        $this->volume = $volume;
        $this->message = 'Звук установлен на ' . $volume . '; ';

        echo $this->message;
    }
}
