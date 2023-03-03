<?php

declare(strict_types=1);

namespace App\Abstracts\Decorator;

enum SizeBeverage: int
{
    case Small = 200;
    case Middle = 300;
    case Large = 400;
    case ExtraLarge = 500;
}
