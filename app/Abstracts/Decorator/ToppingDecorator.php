<?php

declare(strict_types=1);

namespace App\Abstracts\Decorator;

use App\Contracts\Decorator\Topping;

abstract class ToppingDecorator implements Topping
{
    public function __construct(protected Topping $topping)
    {
    }
}
