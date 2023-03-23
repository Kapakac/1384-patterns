<?php

declare(strict_types=1);

namespace App\Contracts\Proxy;

interface Person
{
    public function getName(): string;

    public function getHotOrNotRating(): int;

    public function setName(string $name): void;

    public function setHotOrNotRating(int $rating): void;

}
