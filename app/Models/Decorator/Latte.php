<?php

namespace App\Models\Decorator;

use App\Abstracts\Decorator\SizeBeverage;
use App\Abstracts\Decorator\Beverage;

class Latte extends Beverage
{
    const BASE_PRICE = 155;

    public function __construct()
    {
        parent::__construct();

        $this->description = 'Latte';
    }

    public function calcCost(): float
    {
        return match ($this->getSize()->value) {
            SizeBeverage::Middle->value => self::BASE_PRICE + 25,
            SizeBeverage::Large->value => self::BASE_PRICE + 35,
            SizeBeverage::ExtraLarge->value => self::BASE_PRICE + 45,
            default => self::BASE_PRICE,
        };
    }
}
