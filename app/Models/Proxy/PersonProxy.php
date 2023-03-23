<?php

declare(strict_types=1);

namespace App\Models\Proxy;

use App\Contracts\Proxy\Person as PersonInterface;

class PersonProxy implements PersonInterface
{
    const USERS = ['Gena', 'Rick'];

    public function __construct(protected Person $personBean, protected string $person)
    {
    }

    public function getName(): string
    {
        return $this->personBean->getName();
    }

    public function getHotOrNotRating(): int
    {
        return $this->personBean->getHotOrNotRating();
    }

    public function setName(string $name): void
    {
        if ($this->person === self::USERS[0]) {
            $this->personBean->setName($name);
        } else {
            echo 'Not allowed to set(name)</br>';
        }
    }

    public function setHotOrNotRating(int $rating): void
    {
        if ($this->person === self::USERS[1]) {
            $this->personBean->setHotOrNotRating($rating);
            echo 'Incremented</br>';
        } else {
            echo 'Not allowed to set(rating)</br>';
        }
    }
}
