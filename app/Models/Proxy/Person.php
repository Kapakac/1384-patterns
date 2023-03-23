<?php

declare(strict_types=1);

namespace App\Models\Proxy;

use App\Contracts\Proxy\Person as PersonInterface;

class Person implements PersonInterface
{
    public string $name;
    public int $rating = 0;
    private int $ratingCount = 0;

    public function getName(): string
    {
        return $this->name;
    }

    public function getHotOrNotRating(): int
    {
        return ($this->ratingCount === 0) ? 0 : $this->rating;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setHotOrNotRating(int $rating): void
    {
       $this->rating += $rating;
       $this->ratingCount++;
    }
}
