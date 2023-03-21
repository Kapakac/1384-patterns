<?php

declare(strict_types=1);

namespace App\Models\Command;

class Light
{
    private string $message;

    public function on(): void
    {
        $this->message = 'Свет включен; ';

        echo $this->message;
    }

    function off(): void
    {
        $this->message = 'Свет выключен; ';

        echo $this->message;
    }
}
