<?php

namespace App\Models\Decorator;

use App\Abstracts\Decorator\SizeBeverage;
use App\Abstracts\Decorator\Beverage;

class Cappuccino extends Beverage
{
    const BASE_PRICE = 150;

    public function __construct()
    {
        parent::__construct();

        $this->description = 'Cappuccino';
    }

    public function calcCost(): float
    {
        return match ($this->getSize()->value) {
            SizeBeverage::Middle->value => self::BASE_PRICE + 20,
            SizeBeverage::Large->value => self::BASE_PRICE + 30,
            SizeBeverage::ExtraLarge->value => self::BASE_PRICE + 40,
            default => self::BASE_PRICE,
        };
    }
}
